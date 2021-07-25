<?php

use App\Http\Controllers\Se01Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('welcome');
});
Route::get('glavnaya', function () {
    return view('glavnaya');
})->name("glav");
Route::get('register', function () {
    return view("register");
})->name("register");
Route::get('Login', function () {
    return view("Login");
})->name("Login");
Route::get('newreg', function () {
    return view("newreg");
})->name("newreg");

Route::post('register',[Se01Controller::class , "Se01Form"])->name("Result");
Route::post('newreg',[Se01Controller::class , "Se01Form"])->name("Login");

Route::post('Login',[Se01Controller::class , "submit"])->name("Login");