<?php

namespace App\Http\Controllers;

use App\Constant\SubmitOutcome;
use App\Mail\UserAccountMail;
use App\Models\User;
use App\Services\PasswordGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UsersController extends Controller
{
    public function index() {
        $users = User::get();
        return view("users.index", ["users" => $users]);
    }

    public function create() {
        return view("users.create");
    }

    public function store(Request $request){
        $request->validate([
           "name" => "required|min:3|max:255",
            "email" => "required|email|unique:users"
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = PasswordGenerator::generate();

        try{
            Mail::to($user->email)->send(new UserAccountMail($user));
            $user->save();

            return redirect()
                ->route("users.index")
                ->with(SubmitOutcome::$success, "user created successfully");
        }
        catch (\Exception $e){

            return redirect()
                ->route("users.index")
                ->with(SubmitOutcome::$failed, "operation failed. check your internet connection and retry");
        }

    }

    public function edit($id){

    }

    public  function update(Request $request, User $user){

    }

    public  function destroy($id){
        try
        {
            $user = User::findOrFail($id);
            $user->delete();

            return redirect()
                ->route("users.index")
                ->with(SubmitOutcome::$success, "User deleted successfully");
        }
        catch(\Exception $e)
        {
            return redirect()
                ->route("users.index")
                ->with(SubmitOutcome::$failed, "operation failed. try again");
        }
    }

}
