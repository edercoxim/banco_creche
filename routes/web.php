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
Route::get("/", function (){
    return view("principal");
});
Route::get("/login", function (){
    return view("login");
});
Route::get('/creches','CrecheController@listaCreche');

Route::get('creches/create','CrecheController@create');
Route::post('creches/store','CrecheController@store');
Route::get('creches/{id}/destroy','CrecheController@destroy');
Route::get('creches/{id}/edit','CrecheController@edit');
Route::put('creches/{id}/update','CrecheController@update');