<?php

use App\Http\Controllers\AdminController;
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
    Route::get("/", [AdminController::class, "login"]);
    Route::get("forgot-password", [AdminController::class, "forgot_password"]);

    Route::get("dashboard", [AdminController::class, "dashboard"]);
    Route::get("profile", [AdminController::class, "profile"]);
    Route::resource("donations", DonationsController::class)->only([
        "index", "show"
    ]);
    Route::resource("categories", CategoryController::class)->only([
        "index", "store", "create", "edit", "update", "destroy"
    ]);
    Route::resource("users", UsersController::class)->only([
        "index", "store", "update", "destroy", "create"
    ]);
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
