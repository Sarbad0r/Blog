<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class GoodController extends Controller
{
    public function lll(Request $req)
    {

        $validation = $req->validate([
            'text' => 'required|min:5|max:20',
            'textA' => 'required|min:5|max:20',
        ]);
        return view("index2");
        
    }
}
