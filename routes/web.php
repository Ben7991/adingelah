<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\UpcomingEventsController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about_us']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/upcoming-events', [HomeController::class, 'upcoming_events']);
Route::get('/programs-initiative', [HomeController::class, 'programs_initiative']);
Route::get('/donations', [HomeController::class, 'donations']);
Route::get('/contact-us', [HomeController::class, 'contact_us']);

Route::prefix('admin')->group(function () {
    Route::get("/", [AdminController::class, "login"]);
    Route::get("forgot-password", [AdminController::class, "forgot_password"]);

    Route::get("dashboard", [AdminController::class, "dashboard"]);
    Route::get("profile", [AdminController::class, "profile"]);
    Route::resource("donations", DonationsController::class)->only([
        "index", "show"
    ]);
    Route::resource("categories", CategoriesController::class)->only([
        "index", "store", "create", "edit", "update", "destroy"
    ]);
    Route::resource("users", UsersController::class)->only([
        "index", "store", "update", "destroy", "create"
    ]);
    Route::resource("posts", PostsController::class)->only([
        "index", "store", "update", "destroy", "create", "edit"
    ]);
    Route::resource("events", UpcomingEventsController::class)->only([
        "index", "create", "store", "edit", "update", "destroy"
    ]);
    Route::resource("program-initiative", ProgramsController::class)->only([
        "index", "create", "store", "edit", "update", "destroy"
    ]);
});
