<?php

namespace App\Http\Controllers;

use App\Constant\ImagePath;
use App\Constant\SubmitOutcome;
use App\Models\UpcomingEvent;
use Illuminate\Http\Request;
use function Termwind\ValueObjects\p;

class UpcomingEventController extends Controller
{
    public function index() {
        $events = UpcomingEvent::get();
        return view("events.index", ["events" => $events]);
    }


    public function create() {
        return view("events.create");
    }


    public function edit($id) {
        try
        {
            $event = UpcomingEvent::findOrFail($id);
            return view("events.edit", ["event" => $event]);
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("events.index")
                ->with(SubmitOutcome::$failed, "Event not found");
        }
    }


    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|min:3",
            "flier" => "required|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "event_date" => "required",
            "venue" => "required"
        ]);

        try
        {
            $flierName = $this->generateFileName();

            $event = new UpcomingEvent();
            $event->title = $request->title;
            $event->flier = $flierName;
            $event->venue = $request->venue;
            $event->event_date = $request->event_date;
            $event->description = $request->description;

            $event->save();

            // save the image to the public folder
            request()->flier->move(public_path(ImagePath::$events), $flierName);

            return redirect()
                ->route("events.index")
                ->with(SubmitOutcome::$success, "new Event is created successfully");
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("events.create")
                ->with(SubmitOutcome::$failed, "Event creation failed, try again");
        }

    }



    public function update(Request $request, UpcomingEvent $event){
        $request->validate([
            'title' => 'required|min:3',
            'venue' => 'required|min:3',
            'event_date' => 'required'
        ]);



        // validate the image if it's has content
        if($request->flier != null)
        {
            $request->validate(["flier" => "required|mimes:jpg,png,jpeg,gif,svg|max:2048"]);
        }

        try
        {
            $flierName = ($request->flier != null) ? $this->generateFileName()  : $event->flier;

            if($request->flier != null)
            {
                unlink(ImagePath::$events . $event->flier);
                request()->flier->move(public_path(ImagePath::$events), $flierName);
            }

            $event->title = $request->title;
            $event->flier = $flierName;
            $event->venue = $request->venue;
            $event->event_date = $request->event_date;
            $event->description = $request->description;

            $event->save();

            return redirect()
                ->route("events.index")
                ->with(SubmitOutcome::$success, "Event has been updated successfully");
        }
        catch(\Exception $e)
        {

            return redirect()
                ->route("events.index")
                ->with(SubmitOutcome::$failed, "Event update failed, try again");
        }

    }




    public  function destroy($id){
        try
        {
            $event = UpcomingEvent::findOrFail($id);
            $event->delete();

            return redirect()
                ->route("events.index")
                ->with(SubmitOutcome::$success, "Event has been deleted successfully");
        }
        catch(\Exception $e)
        {
            return redirect()
                ->route("events.index")
                ->with(SubmitOutcome::$failed, "Event deletion failed, try again");
        }
    }



    private function generateFileName() : string
    {
        return time() . '.' . request()->flier->getClientOriginalExtension();
    }
}
