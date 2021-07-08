<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rollback;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Contracts\Service\Attribute\Required;

class RollbackController extends Controller
{
    public function submit(Request $roll){
        
        $validation = $roll->validate([
            "textA" => "required|min:5|max:50",
    
        ]);
        return view('good');

        $contact = new Rollback();
        $contact->login = $roll->input("login");
        $contact->password = $roll->input("password");
        $contact->textA = $roll->input("textA");
        $contact->save();

    }
}
