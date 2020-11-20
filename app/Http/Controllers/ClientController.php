<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Bien;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
   public function liste_formation(){
    $formations= Formation::all();


    return view('client.formation',[
        'formations'=>$formations
    ]);
}


public function liste_vente(){
    $biens= Bien::where('type',1)->get();


    
    return view('client.vente',[
        'biens'=>$biens
    ]);
}




public function liste_location(){
    $biens= Bien::where('type',2)->get();

    
    return view('client.location',[
        'biens'=>$biens
    ]);
}




public function liste_construction(){
    $biens= Bien::where('type',3)->get();
    
   
    return view('client.construction',[
        'biens'=>$biens
    ]);
}




public function details_immobilier($id){

    $bien=Bien::findorFail($id);
    return view('client.details_immo',[
        'bien'=>$bien
    ]);
}


public function details_formation($id){
    $formation = Formation::findOrfail($id);
    
    return view('client.detaila_formation',[
        'formation'=>$formation
    ]);
}




public function rechercher_construction(REQUEST $request){
    
    $biens=Bien::where('quartier',request('search'))
    ->where('type',3)->get();
    return view('client.construction',[        
        'biens'=>$biens
        ]);    
    }    
    
    
    
    //Recherche Location
    public function rechercher_location(REQUEST $request){
    
        $biens=Bien::where('quartier',request('search'))
                    ->where('type',2)->get();
        return view('client.location',[
            'biens'=>$biens
        ]);
    }
    


        //Recherche vente
        public function rechercher_vente(REQUEST $request){
    
            $biens=Bien::where('quartier',request('search'))
                        ->where('type',1)->get();
            return view('client.vente',[
                'biens'=>$biens
            ]);
        }
      
        


        //Recherche formation
        public function rechercher_formation(REQUEST $request){
    
            $formations=Formation::where('tiitre',request('search'))->get();
            return view('client.formation',[
                'formations'=>$formations
            ]);
        }



        public function liste_agenda (){
            $biens= Bien::where('type',4)->get();


            return view('client.a_propos',[
                'biens'=>$biens
            ]);
        }










}
