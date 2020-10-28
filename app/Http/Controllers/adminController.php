<?php

namespace App\Http\Controllers;

use \App\Formation;
use \App\Bien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class adminController extends Controller
{



    public function index(){

        return view('admin.home');
    }

   public function addFormation(REQUEST $request){

   
       $vignette='';
       $file=request('image');
       $vignette= rand().$file->getClientOriginalName();
       $file->move(public_path('image'),$vignette);
       $vignette='image/'.$vignette;

       Formation::create([
        'tiitre'=>request('nom'),
        'prix'=>request('prix'),
        'description'=>request('description'),
        'image'=>$vignette,
       ]);

       Session::flash('succes','Formation enrégistré avec succes.');

       return redirect('liste_des_formation');

       
   }




   public function liste_formation(){
       $formations= Formation::all();


       return view('admin.liste_formation',[
           'formations'=>$formations
       ]);
   }


   public function show($id){

    $id=Crypt::decrypt($id);
    $formation=Formation::findorfail($id);

       return view('admin.update_formation',[
           'formation'=>$formation
       ]);
   }


   public function update(REQUEST $request){


    Formation::findOrFail(request('id'))->update([
        'tiitre'=>request('nom'),
        'prix'=>request('prix'),
        'description'=>request('description'),
    ]);

    Session::flash('succes','Formation Modifié avec succes.');

       return redirect('liste_des_formation');



   }



   public function addBien(REQUEST $request){


    $vignette='';
    $file=request('image');
    $vignette= rand().$file->getClientOriginalName();
    $file->move(public_path('image'),$vignette);
    $vignette='image/'.$vignette;

    Bien::create([
        'nom'=>request('nom'),
        'type'=>request('type'),
        'prix'=>request('prix'),
        'quartier'=>request('quartier'),
        'description'=>request('description'),
        'image'=>$vignette
    ]);

    

    Session::flash('succes','Element enrégistré avec succes.');

    if (request('type')==1) {
        return redirect('liste_des_vente');
    }elseif (request('type')==2){
        return redirect('liste_des_location');
    }else{
        return redirect('liste_des_construction');
    }
   }







   public function liste_vente(){

    $biens=Bien::where('type',1)->get();

    
    return view('admin.liste_vente',[
        'biens'=>$biens
    ]);
        
}



public function liste_location(){

    $biens=Bien::where('type',2)->get();

    
    return view('admin.liste_location',[
        'biens'=>$biens
    ]);
}


public function liste_construction(){

    $biens=Bien::where('type',3)->get();

    
    return view('admin.liste_const',[
        'biens'=>$biens
    ]);
}



public function show_bien($id){

    $bien=Bien::findOrfail($id);

    return view('admin.update_bien',[
        'bien'=>$bien
    ]);
}



public function update_bien(REQUEST $request){

    Bien::findOrFail(request('id'))->update([
        'nom'=>request('nom'),
        'type'=>request('type'),
        'prix'=>request('prix'),
        'quartier'=>request('quartier'),
        'description'=>request('description'),
    ]);

    Session::flash('succes','Element modifié avec succes.');

    if (request('type')==1) {
        return redirect('liste_des_vente');
    }elseif (request('type')==2){
        return redirect('liste_des_location');
    }else{
        return redirect('liste_des_construction');
    }
   
}























}