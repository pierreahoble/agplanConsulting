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
            return redirect('/accueil-admin');
        } else {
            Session::flash('error','Vous n\'êtes pas autorisé ...');
            return redirect()->back();
        }

    }



    public function logout(){
        $user=Auth::logout();
        // return $user;
        return  redirect('/');
    }


    public function register(REQUEST $request)
    {
        $this->validate($request,[
            'nom'=>['required'],
            'email'=>['required','email'],
            'prenom'=>['required'],
            'tel'=>['required'],
        ],[
            'email'=>'Adresse email invalide',
            'required'=>'Champ obligatoire'
        ]);

        //return $request;
        User::create([
            'name'=>request('nom'), 
            'email'=>request('email'), 
            'password'=>bcrypt(request('AGPLAN CONSULTING1234567890')),
            'prenom'=>request('prenom'),
            'telephone'=>request('tel')
        ]);
        return  redirect('home');;
    }















}
