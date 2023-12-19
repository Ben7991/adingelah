<?php

namespace App\Http\Controllers;

use App\Constant\SubmitOutcome;
use App\Mail\ResetUserPasswordMail;
use App\Mail\SendUserPasswordMail;
use App\Models\User;
use App\Services\PasswordGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class UsersController extends Controller
{
    public function index() {
        $users = User::all();
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
        $generatedPassword = PasswordGenerator::generate();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $generatedPassword;

        try{
            Mail::to($user->email)->send(new SendUserPasswordMail($user, $generatedPassword));
            $user->save();

            return redirect()
                ->route("users.index")
                ->with(SubmitOutcome::$SUCCESS, "user created successfully with password sent to the provided email");
        }
        catch (\Exception $e){
            return redirect()
                ->route("users.index")
                ->with(SubmitOutcome::$FAILED, "operation failed. check your internet connection and retry");
        }
    }


    public function updatePassword(Request $request){
        $request->validate([
            "current_password" => "required|string",
            "new_password" => "required|min:6|",
            "confirm_password" => "required|same:new_password"
        ]);

        $user = Auth::user();

        if(Hash::check($request->current_password, $user->password) == true){

            $user->password = Hash::make($request->new_password);
            $user->save();

            Auth::logout();

            return redirect()
                ->route("login-page")
                ->with(SubmitOutcome::$SUCCESS, "Password updated successfully, Login to continue");
        }


        return redirect()
            ->route("profile")
            ->with(SubmitOutcome::$FAILED, "Current password is not correct");
    }


    public function resetPassword(Request $request){
        $request->validate(["email" => "required|email"]);

        try
        {
            $newlyGeneratedPassword = PasswordGenerator::generate();
            $user = User::where('email', $request->email)->first();

            if($user == null){
                return redirect()
                    ->route("forgot-password")
                    ->with(SubmitOutcome::$FAILED, "Provided email does not exist");
            }

            Mail::to($request->email)->send(new ResetUserPasswordMail($newlyGeneratedPassword));
            $user->password = Hash::make($newlyGeneratedPassword);
            $user->save();

            return redirect()
                ->route("login-page")
                ->with(SubmitOutcome::$SUCCESS, "New Password is sent to the provided email");
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("forgot-password")
                ->with(SubmitOutcome::$FAILED, "Operation failed, check your internet and retry");

        }
    }


    public  function update(Request $request){
        $request->validate([
            "name" => "required|min:3",
            "email" => "required|email|unique:users",
        ]);

        try
        {
            $user = Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            return redirect()
                ->route("profile")
                ->with(SubmitOutcome::$SUCCESS, "Profile information updated");
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("profile")
                ->with(SubmitOutcome::$FAILED, "Profile update failed");
        }
    }


    public  function destroy($id){
        try
        {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();

            $user = User::find($id);
            $user->delete();

            return redirect()
                ->route("login-page")
                ->with(SubmitOutcome::$SUCCESS, "User account deleted successfully");
        }
        catch(\Exception $e)
        {
            return redirect()
                ->route("profile")
                ->with(SubmitOutcome::$FAILED, "operation failed. try again");
        }
    }


}
