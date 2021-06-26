<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


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
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/', function () {  
// });

Route::prefix(['prefix' => 'category'], function () {
    Route::get('category', [CategoryController::class, "index"]);
    Route::get('category/crete', [CategoryController::class, "create"]);
});
