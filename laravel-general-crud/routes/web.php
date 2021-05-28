<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'MatchController@homeFunction')->name('home');

Route::get('/match/{id}', 'MatchController@singleMatchFunction')->name('singleMatch');

Route::get('/addMatch', 'MatchController@createMatchFunction')->name('createMatch');

Route::post('/addMatch/storeMatch', 'MatchController@storeMatchFunction')->name('storeMatch');

Route::get('/editMatch{id}', 'MatchController@editMatchFunction')->name('editMatch');

Route::post('/updateMatch/{id}', 'MatchController@updateMatchFunction')->name('updateMatch');

Route::get('deleteMatch/{id}', 'MatchController@deleteMatchFunction')->name('deleteMatch');