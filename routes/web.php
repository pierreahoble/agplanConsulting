<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**Administration ***/


Route::get('home2',function(){
    App\User::create([
        'name'=>'Peter AHOBLE',
        'email'=>'ahosipik@gmail.com',
        'password'=>bcrypt('1234')
    ]);

    return 'fait';
});


Route::group(['middleware' => 'App\Http\Middleware\AuthMiddleware'], function () {
    
    Route::get('/accueil-admin', 'adminController@index');
    
    Route::get('logout','LoginController@logout');
    //Liste Formation
    
    Route::get('liste_des_formation','adminController@liste_formation');
    
    
    //Vue formation
    Route::get('ajouter_formation',function(){
        return view('admin.add_artcle');
    });
    
    //Ajouter une formation
    Route::post('ajouter_formation','adminController@addFormation');
    
    //Update-Vue Formation
    Route::get('modifier_formation/{id}','adminController@show')->name('modifier_formation');
    
    //Update- Formation
    Route::post('modifier_formation','adminController@update');
    
    
    
    
    //Enregistre element
    
    Route::post('ajouter_un_element','adminController@addBien');
    
    
    Route::get('liste_des_vente','adminController@liste_vente');
    
    
    Route::get('liste_des_construction','adminController@liste_construction');
    
    
    Route::get('liste_des_location','adminController@liste_location');
    
    
    //Upate Vue Bien
    
    Route::get('{id}/modifier_bien','adminController@show_bien');
    
    //Valider update
    
    Route::post('modifier_bien','adminController@update_bien');
    
    
    
    //Ajouter un element    
    Route::get('ajouter_un_element',function(){
        return view('admin.ajouter');
    });

    //Veu ajouter une page
    Route::get('ajouter_une_page','adminController@ajouter_page');

    //Ajouter une page
    Route::post('ajouter_une_page','adminController@insert_page');

    //Liste agenda
    Route::get('liste_agenda','adminController@liste_agenda');


    //Modifier un element de page
    Route::get('modifier-une-page/{id}','adminController@show_page');
    
    //Valider les modification de la page
    Route::post('modifier_une_page','adminController@update_page');

    //Liste des elements d'une page
    Route::get('liste_page_{id}','adminController@liste_page');

    //Liste des etudes
    Route::get('liste_des_etudes','adminController@liste_etude');

    //Liste des etudes
    Route::get('liste_des_coaching','adminController@coaching');

    //Liste des audit
    Route::get('liste_des_audit','adminController@audit');

    //Liste des consignation
    Route::get('liste_des_consignation','adminController@consignation');

    //Liste des transport
    Route::get('liste_des_transport','adminController@transport');


    //Liste des entreepo
    Route::get('liste_des_entrepots','adminController@entrepot');


    //Liste des association
    Route::get('liste_des_association','adminController@association');

    //Liste des association
    Route::get('liste_des_partenaire','adminController@partenaire');


    //
    //Route::get('liste-des-page_{id}','adminController@liste_page');


}); 
//================================Fin Middleware======================================\\








//Vue Login
Route::get('login',function(){
    return view('admin.login');
});

Route::post('login','LoginController@connexion');

















/**Client****/

Route::get('/', function(){
    return view('client.home');
});

Route::get('home', function(){
    return view('client.home');
});

//Etude
Route::get('etude','ClientController@etude_page');

//Conseil
Route::get('conseil','ClientController@conseil_page');

//Formation
Route::get('formation','ClientController@liste_formation');

//Coaching
Route::get('coaching','ClientController@coaching_page');

//Audit
Route::get('audit','ClientController@audit_page');


//Consignation
Route::get('consignation','ClientController@consignation_page');

//Transport
Route::get('transport','ClientController@transport_page');

//Representation
Route::get('representation','ClientController@representation_page');

//entreposage
Route::get('entreposage','ClientController@entreposage_page');


//Construction
Route::get('construction','ClientController@liste_construction');


//Location
Route::get('location','ClientController@liste_location');

//Vente
Route::get('vente','ClientController@liste_vente');


//faire Gerer
Route::get('faire','ClientController@faire_page');

//Partenaire
Route::get('partenaire','ClientController@partenaire_page');

//A Propos
Route::get('agenda','ClientController@liste_agenda');

//Organisation
Route::get('organisation',function(){
    return view('client.organisation');
});


//Contact
Route::get('contact',function(){
    return view('client.contact');
});



//Entrepreneuriat
Route::get('entrepreneuriat',function(){
    return view('client.entrepreneuriat');
});

//Douane
Route::get('douane',function(){
    return view('client.douane');
});

//immobilier
Route::get('immobilier',function(){
    return view('client.immobilier');
});


//Details de page

Route::get('details_{id}','adminController@details_page');


//Details Immo 
Route::get('details-bien-immobilier_{id}','ClientController@details_immobilier');


//Details formatio
Route::get('details-formation_{id}','ClientController@details_formation');

//Register

Route::get('register',function(){
    return view('admin.register');
});


//Rechercher une construction
Route::post('rechercher-construction','ClientController@rechercher_construction');


//Rechercher une location
Route::post('rechercher-location','ClientController@rechercher_location');


//Route Vente
Route::post('rechercher-vente','ClientController@rechercher_vente');



//Route Vente
Route::post('rechercher-formation','ClientController@rechercher_formation');


//Register
Route::post('register','LoginController@register');

