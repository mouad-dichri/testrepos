<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/', function () {
    return view('welcome');
})->name('welcome');
 
Route::view('/home','home')->name('home');
Route::view('/test','test')->name('test');
Route::view('/accueil','accueil')->name('accueil');
Route::view('/profil','profile')->name('profile');

Route::post('/valideconnect','App\Http\Controllers\getDataController@connect')->name('controle');
Route::get('/deconnect','App\Http\Controllers\getDataController@deconnect')->name('deconnexion');

Route::view('/connexion','connexion')->name('connexion');

Route::POST('/affichage','App\Http\Controllers\getDataController@donne')->name('affichage');




//Route::view('/','welcome')->name('welcome');
