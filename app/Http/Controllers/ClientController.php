<?php

namespace App\Http\Controllers;

use App\Bien;
use App\Formation;
use App\Information;
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



    
public function conseil_page()
{
 $informations=Information::where('type',1)->get();
  
    return view('client.conseil',[
        'informations'=>$informations
    ]);
  
    
}



public function etude_page()
{

    $informations=Information::where('type',2)->get();
  
    return view('client.etude',[
        'informations'=>$informations,
        'etude'=>'Etudes'
    ]);

}


public function coaching_page()
{

    $informations=Information::where('type',3)->get();
  
    return view('client.coaching',[
        'informations'=>$informations
    ]);

}

public function audit_page()
{

    $informations=Information::where('type',4)->get();
  
    return view('client.audit',[
        'informations'=>$informations
    ]);


}


public function consignation_page()
{
    $informations=Information::where('type',5)->get();
  
    return view('client.consignation',[
        'informations'=>$informations
    ]);
}


public function transport_page()
{
    $informations=Information::where('type',6)->get();
  
    return view('client.transport',[
        'informations'=>$informations
    ]);
}



public function representation_page()
{
    $informations=Information::where('type',7)->get();
  
    return view('client.transport',[
        'informations'=>$informations
    ]);
}


public function entreposage_page()
{
    $informations=Information::where('type',8)->get();
  
    return view('client.entreposage',[
        'informations'=>$informations
    ]);
}


public function faire_page()
{
    $informations=Information::where('type',9)->get();
  
    return view('client.faire',[
        'informations'=>$informations
    ]);

}



public function partenaire_page()
{
    $informations=Information::where('type',11)->get();
  
    return view('client.partenaire',[
        'informations'=>$informations
    ]);  
}

















}
