<?php

namespace App\Http\Controllers;

use \App\Formation;
use \App\Bien;
use \App\Information;
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

    // $id=Crypt::decrypt($id);
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
        'date'=>request('date'),
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
    }elseif (request('type')==4){
        return redirect('liste_agenda');
    }
    else{
        return redirect('liste_des_construction');
    }



  
}


//Vue ajouter une page
public function ajouter_page(){
        return view('admin.page');
}

//Ajputer une page

public function insert_page(REQUEST $request){

    $vignette='';
    $file=request('image');
    $vignette= rand().$file->getClientOriginalName();
    $file->move(public_path('image'),$vignette);
    $vignette='image/'.$vignette;

    Information::create([
        'titre'=>request('titre'),
        'type'=>request('type'),
        'description'=>request('description'),
        'image'=>$vignette
    ]);

    return redirect()->back();
}




public function show_page($id)
{

    $information=Information::findorFail($id);
    return view('admin.update_page',[
        'information'=>$information
    ]);
}



public function update_page(REQUEST $request){

    $vignette='';
    

    if ($request->hasFile('image')) {
        $file=request('image');
        $vignette= rand().$file->getClientOriginalName();
        $file->move(public_path('image'),$vignette);
        $vignette='image/'.$vignette;
        information::find(request('id'))->update([
            'titre'=>request('titre'),
            'description'=>request('description'),
            'image'=>$vignette,
        ]);
        
    } else {
        information::find(request('id'))->update([
            'titre'=>request('titre'),
            'description'=>request('description'),
            //'image'=>$vignette,
        ]);
    }
    



    Session::flash('succes','Element modifié avec succes.');
    return redirect('accueil-admin');
}



public function details_page($id)
{

    $information=Information::findOrFail($id);
    return view('client.details_page',[
        'information'=>$information,
        'formation'=>'null', 
    ]);

}












//Liste les elements sur la page

public function liste_page($id)
{
   
    $informations=Information::where('type',$id)->get();
  
        return view('admin.liste_page',[
            'informations'=>$informations
        ]);
   
    
}
























//liste agenda
public function liste_agenda(){
    
    $biens=Bien::where('type',4)->get();
    return view('admin.liste_agenda',[
        'biens'=>$biens
    ]);
}



























}