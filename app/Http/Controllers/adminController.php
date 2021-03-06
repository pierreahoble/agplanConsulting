<?php

namespace App\Http\Controllers;

use \App\Bien;
use App\Invite;
use App\Formation;
use \App\Information;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{



    public function index(){

        $ip = Request::ip();
        $ip_verifier = Invite::where('ip',$ip)->get();


        if (count($ip_verifier)==0) {
            Invite::create([
                'ip' => $ip,
                'invite' => 1
            ]);
        }


        $user = Invite::count();
        $formation = Formation::count();
        $location = Bien::where('type', '=',2)->count();
        $construction = Bien::where('type',3)->count();
        $vente = Bien::where('type',1)->count();
        return view('admin.home',[
            'formation' => $formation,
            'location' => $location,
            'construction' => $construction,
            'vente' => $vente,
            'user' => $user,
        ]);
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
    Session::flash('succes','Element ajouté avec succes.');
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
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_page',[
            'informations'=>$informations
        ]);
   
    
}



public function liste_etude()
{
   
    $informations=Information::where('type',2)->get();
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_etude',[
            'informations'=>$informations
        ]);
   
    
}

public function coaching()
{
   
    $informations=Information::where('type',3)->get();
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_coaching',[
            'informations'=>$informations
        ]);
   
    
}


public function audit()
{
   
    $informations=Information::where('type',4)->get();
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_coaching',[
            'informations'=>$informations
        ]);
   
    
}


public function consignation()
{
   
    $informations=Information::where('type',5)->get();
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_consignation',[
            'informations'=>$informations
        ]);
   
    
}


public function transport()
{

    // entrepot
   
    $informations=Information::where('type',6)->get();
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_transport',[
            'informations'=>$informations
        ]);
   
    
}


public function entrepot()
{

    $informations=Information::where('type',8)->get();
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_entrepo',[
            'informations'=>$informations
        ]);
}



public function association()
{

    $informations=Information::where('type',10)->get();
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_asso',[
            'informations'=>$informations
        ]);
}


public function partenaire()
{

    $informations=Information::where('type',22)->get();
    // $informations=Information::where('type',$id)->first();
  
    // return $informations;
        return view('admin.liste_partenaire',[
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