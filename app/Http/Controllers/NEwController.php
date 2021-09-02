<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NEwController extends Controller
{
    public function categories(){
        $posts = Post::all();
        return view('categories',[
            'postll' => $posts
        ]);
    }
}
