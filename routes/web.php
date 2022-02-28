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
Route::get('animation',function(){
    return view('animation');
});
Route::get('gammeAlouer',function(){
    return view('gammeAlouer');
});
Route::get('voitureDetails',function(){
    return view('voitureDetails');
});
Route::get('faq',function(){
    return view('faq');
});
Route::get('connexion',function(){
    return view('connexion');
});