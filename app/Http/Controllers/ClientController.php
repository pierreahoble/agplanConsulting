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










}
