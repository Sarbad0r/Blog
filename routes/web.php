<?php

use App\Http\Controllers\NEwController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('home');
})->name("home");
Route::get('/about', function () {
return view("about");
})->name("about");


Route::get('categories', [NEwController::class, 'categories'])->name('categories'); 
    

// Route::get('/{id}/{name}', function ($id, $name) {
//     return "id:". $id ."name:" . $name;
// });
