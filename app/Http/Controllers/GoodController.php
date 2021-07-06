<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Contact;

class GoodController extends Controller
{
    public function lll(Request $req)
    {
        $req->validate([
            'text' => ['required', 'min:5', 'max:20'],
            'textA' => 'required|min:5|max:20',
        ]);

        $contact = new Contact();
        $contact->text = $req->input("text");
        $contact->login = $req->input("login");
        $contact->textA = $req->input("textA");
        $contact->save();


        return redirect()->route('home')->with("success", "сообщение было добавлено");


        //     // return view("index2");
        //    dd($req);
        // }
    }
}
