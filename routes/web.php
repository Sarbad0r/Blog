<?php


use App\Http\Controllers\RollbackController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
 return view("home");
})->name("home");
Route::get('contact', function () {
    return view("contact");
})->name("contact");
Route::get('about', function () {
    return view("about");
})->name("about");

Route::get('register', function () {
    return view("register");
})->name("register");

Route::post('register', [RollbackController::class, "submit"])->name("form");
