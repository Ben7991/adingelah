<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
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

});
