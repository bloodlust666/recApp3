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


Route::get('/', 'HomeController@index');
Route::get('/search','HomeController@search');
/*Route::get('espaceCandidat', function () {
    return view('candidat.index');
})->middleware('EspaceCM:1');
Route::get('espaceRecruteur', function () {
    return view('recruteur.index');
})->middleware('EspaceRM:1');*/

//________________________________________  Candidat Route _____________________________________//
Route::post('cvs/', 'CvController@store');
Route::get('cvs/create', 'CvController@create');

/*Route::get('create', function () {
    return view('cv.create');
});*/


//________________________________________  Admin Route _____________________________________//
Route::get('espaceAdmin', function () {
    return view('admin');
});

// ______________________________ Espace c r middlewares _______________________________//

Route::get('espaceRecruteur', 'RecruteurController@espaceRecruteurT')->middleware('EspaceRM:1');
Route::get('espaceCandidat', 'CandidatController@espaceCandidatT')->middleware('EspaceCM:1');

// ______________________________ annonce Routes _______________________________//

//Route::get('annonces-MesAnnonces', 'AnnonceController@index')->name('annonce.MesAnnonces');
Route::get('annonces/', 'AnnonceController@index')->middleware('EspaceRM:1');
Route::get('annonces/create', 'AnnonceController@create')->middleware('EspaceRM:1');
Route::post('annonces/', 'AnnonceController@store')->middleware('EspaceRM:1');
Route::get('annonces/{id}/edit', 'AnnonceController@edit')->middleware('EspaceRM:1');
Route::put('annonces/{id}', 'AnnonceController@update')->middleware('EspaceRM:1');
Route::delete('annonces/{id}', 'AnnonceController@destroy')->middleware('EspaceRM:1');

// create entreprise
Route::get('store-Entreprise', 'EntrepriseController@showEnrepriseForm')->name('recruteur.storeEntreprise')->middleware('EspaceRM:1');
Route::post('store-Entreprise', 'EntrepriseController@store')->middleware('EspaceRM:1');

// custom registerR
Route::get('custom-register', 'CustomRegisterController@showRegisterFormR')->name('custom.register');
Route::post('custom-register', 'CustomRegisterController@registerR');

// custom login
Route::get('custom-login', 'CustomLoginController@showLoginForm')->name('custom.login');
Route::post('custom-login', 'CustomLoginController@login');
//Route::get('login','CustomLoginController@showLoginForm');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
