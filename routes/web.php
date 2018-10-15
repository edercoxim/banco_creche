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

Route::group(['prefix'=>'creches', 'where'=>['id'=>'[0-9]+']], function (){

Route::get('',['as'=>'creches','uses'=>'CrecheController@index']);
Route::get('create',['as'=>'creches.create','uses'=>'CrecheController@create']);
Route::post('store',['as'=>'creches.store','uses'=>'CrecheController@store']);
Route::get('{id}/destroy',['as'=>'creches.destroy','uses'=>'CrecheController@destroy']);
Route::get('{id}/edit',['as'=>'creches.edit','uses'=>'CrecheController@edit']);
Route::put('{id}/update',['as'=>'creches.update','uses'=>'CrecheController@update']);
});