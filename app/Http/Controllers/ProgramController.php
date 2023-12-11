<?php

namespace App\Http\Controllers;

use App\Constant\SubmitOutcome;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        $programs = Program::get();

        return view("programs.index", ["programs" => $programs]);
    }



    public function create() {
        return view("programs.create");
    }



    public function edit($id) {
        try
        {
            $program = Program::findOrFail($id);
            return view("programs.edit", ["program" => $program]);
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("program-initiative.index")
                ->with(SubmitOutcome::$failed, "Program not found");
        }
    }



    public function store(Request $request){
        $request->validate([
            "title" => "required|min:3",
            "days" => "required",
            "time" => "required",
        ]);

        try
        {
            $program = new Program();

            $program->title = $request->title;
            $program->days = $request->days;
            $program->time = $request->time;
            $program->description = $request->description;

            $program->save();

            return redirect()
                ->route("program-initiative.index")
                ->with(SubmitOutcome::$success, "New program added successfully");
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("program-initiative.index")
                ->with(SubmitOutcome::$failed, "Failed to add program, please try again later");
        }
    }



    public function update(Request $request, $id){
        $request->validate([
            "title" => "required|min:3",
            "days" => "required",
            "time" => "required",
        ]);


        try
        {
            $program = Program::findOrFail($id);

            $program->title = $request->title;
            $program->days = $request->days;
            $program->time = $request->time;
            $program->description = $request->description;

            $program->save();

            return redirect()
                ->route("program-initiative.index")
                ->with(SubmitOutcome::$success, "Program update was successfully");
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("program-initiative.index")
                ->with(SubmitOutcome::$failed, "Failed to update program, please try again later");
        }
    }



    public function destroy($id){
        try
        {
            $program = Program::findOrFail($id);
            $program->delete();

            return redirect()
                ->route("program-initiative.index")
                ->with(SubmitOutcome::$success, "Program deleted was successful");
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("program-initiative.index")
                ->with(SubmitOutcome::$failed, "failed to delete program. try again later");
        }
    }
}












