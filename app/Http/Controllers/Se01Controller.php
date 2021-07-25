<?php

namespace App\Http\Controllers;

use App\Models\Se01;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class Se01Controller extends Controller
{
    public function Se01Form(Request $Form){
        
        $Form->validate([
            'email' => 'email:rfc,dns',
            'password' => 'required|min:4|max:30',
            'about' => 'required|min:10|max:500',
            'birthday'=>'date_format:format',
            'name' => 'required|min:3,max:20',
        ]);
    }

        public function submit(Request $Form){
            $contact = new Se01();
            $contact->name = $Form->input('name');
            $contact->email = $Form->input('email');
            $contact->password = md5($Form->input('password'));
            $contact->about = $Form->input('ABOUT');
            $contact->birthday = $Form->input('birthday');

            $contact->save();


            return redirect()->route('Login');

        }
    
}
