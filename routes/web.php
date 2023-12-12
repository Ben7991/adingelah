<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UpcomingEventController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("home.index");
});

Route::prefix('admin')->group(function () {

    Route::group(["middleware" => "guest"], function () {
        Route::get("/", [AdminController::class, "login"])
            ->name("login-page");

        Route::get("forgot-password", [AdminController::class, "forgot_password"])
            ->name("forgot-password");

        Route::post("login", [AuthController::class, "login"])
            ->name("sign-in");

        Route::post("reset-password", [UsersController::class, "resetPassword"])
            ->name("reset-password");
    });



    Route::group(["middleware" => "auth"], function () {
        Route::get("dashboard", [AdminController::class, "dashboard"])->name("dashboard");

        Route::get("profile", [AdminController::class, "profile"])->name("profile");

        Route::post("logout", [AuthController::class, "logout"])->name("sign-out");

        Route::resource("donations", DonationsController::class)->only([
            "index", "show"
        ]);
        Route::resource("categories", CategoryController::class)->only([
            "index", "store", "create", "edit", "update", "destroy"
        ]);
        Route::resource("users", UsersController::class)->only([
            "index", "store", "update", "destroy", "create"
        ]);
        Route::put("update-password", [UsersController::class, "updatePassword"])
            ->name("update-password");

        Route::resource("posts", PostController::class)->only([
            "index", "store", "update", "destroy", "create", "edit"
        ]);
        Route::resource("events", UpcomingEventController::class)->only([
            "index", "create", "store", "edit", "update", "destroy"
        ]);
        Route::resource("program-initiative", ProgramController::class)->only([
            "index", "create", "store", "edit", "update", "destroy"
        ]);
    });


});




























