<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{


    public function connexion(REQUEST $request){



        $this->validate($request,[
            'email'=>['required','email'],
            'password'=>['required']
        ],[
            'email'=>'Adresse email invalide',
            'required'=>'Champ obligatoire'
        ]);

        $user=Auth::attempt([
            'email' =>request('email'),
            'password' =>request('password')
        ]);

        if ($user) {
            // return 'rien';
            Session::flash('succes','Vous êtes connecté avec success');
            return redirect('/');
        } else {
            Session::flash('error','Vous n\'êtes pas autorisé ...');
            return redirect()->back();
        }

    }
}
