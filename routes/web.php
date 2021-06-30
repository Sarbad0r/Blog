<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;


Route::get('/', function () {
    return view("welcome");
});
Route::get('/home', function () {
    return view('home');
})->name("home");
Route::get('/contact', function () {
    return view('contact');
})->name("contact");
Route::get('/about', function () {
    return view('about');
})->name("about");

Route::prefix(['prefix' => 'category'], function () {
    Route::get('category', [CategoryController::class, "index"]);
    Route::get('category/crete', [CategoryController::class, "create"]);
});
Route::get('index1', function () {
    return view("index1");
});


Route::post("index1", [GoodController::class, "lll"])->name("form");



// Route::get('/', function () {
//     // $category = DB::table("categories")->insert([
//     //     'name'=>'notebook'
//     //     ]);
//     //     return $category;
//     $category = new App\Models\Category();
//         $category->name='notebook';
//         $category->save();
//     return $category;
// });




// Route::get('/', function () {

//     $categoria = DB::table("categoria")->insert([
//         'name'=>'notebook'
//     ]);
//     return $categoria;


//     $categoria = new App\Models\uss();

//         // $categoria->name='notebook';
//         // $categoria->save();
//         // return$categoria;
// });
