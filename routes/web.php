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


Route::get('/', function () {
    return view('admin.home');
})->name('votre-backoffice');



//Liste Formation

Route::get('liste_des_formation','adminController@liste_formation');


//Vue formation
Route::get('ajouter_formation',function(){
    return view('admin.add_artcle');
});

//Ajouter une formation
Route::post('ajouter_formation','adminController@addFormation');

//Update-Vue Formation
Route::get('{id}/modifier_formation','adminController@show');

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





Route::get('ajouter_un_element',function(){
    return view('admin.ajouter');
});


//Vue Login
Route::get('login',function(){
    return view('admin.login');
});

Route::post('login','LoginController@connexion');

















/**Client****/

Route::get('home', function(){
    return view('client.home');
});

//Etude
Route::get('etude',function(){
    return view('client.etude');
});

//Conseil
Route::get('conseil',function(){
    return view('client.conseil');
});

//Formation
Route::get('formation','ClientController@liste_formation');

//Coaching
Route::get('coaching',function(){
    return view('client.coaching');
});

//Audit
Route::get('audit',function(){
    return view('client.audit');
});


//Consignation
Route::get('consignation',function(){
    return view('client.consignation');
});

//Transport
Route::get('transport',function(){
    return view('client.transport');
});

//Representation
Route::get('representation',function(){
    return view('client.representation');
});

//entreposage
Route::get('entreposage',function(){
    return view('client.entreposage');
});


//Construction
Route::get('construction','ClientController@liste_construction');


//Location
Route::get('location','ClientController@liste_location');

//Vente
Route::get('vente','ClientController@liste_vente');


//faire Gerer
Route::get('faire',function(){
    return view('client.faire');
});


//A Propos
Route::get('agenda',function(){
    return view('client.a_propos');
});

//Organisation
Route::get('organisation',function(){
    return view('client.organisation');
});


//Contact
Route::get('contact',function(){
    return view('client.contact');
});


//Partenaire
Route::get('partenaire',function(){
    return view('client.partenaire');
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