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
//Route::get("/home", function (){
//    return view("login");
//});
Route::get("/login", function (){
    return view("login");
});
//
<<<<<<< HEAD
Route::get('/', 'HomeController@index');
Route::get('/home', 'CrecheController@index');

Auth::routes();

Route::get('/creches', 'CrecheController@index')->name('creches');

=======
Route::get('/', 'CrecheController@index');
Route::get('/home', 'CrecheController@index');
Auth::routes();

Route::get('/creches', 'CrecheController@index')->name('creches');
//Route::get('/show-user', 'HomeController@show')->name('home');
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce

//

Route::group(['prefix'=>'creches', 'where'=>['id'=>'[0-9]+']], function (){

Route::get('',['as'=>'creches','uses'=>'CrecheController@index']);
Route::get('create',['as'=>'creches.create','uses'=>'CrecheController@create']);
Route::post('store',['as'=>'creches.store','uses'=>'CrecheController@store']);
Route::get('{id}/destroy',['as'=>'creches.destroy','uses'=>'CrecheController@destroy']);
Route::get('{id}/edit',['as'=>'creches.edit','uses'=>'CrecheController@edit']);
Route::put('{id}/update',['as'=>'creches.update','uses'=>'CrecheController@update']);
});



<<<<<<< HEAD
Route::group(['prefix'=>'users', 'where'=>['id'=>'[0-9]+']], function (){

    Route::get('',['as'=>'users','uses'=>'AdminController@index']);
    Route::get('create',['as'=>'users.create','uses'=>'AdminController@create']);
    Route::post('store',['as'=>'users.store','uses'=>'AdminController@store']);
    Route::get('{id}/destroy',['as'=>'users.destroy','uses'=>'AdminController@destroy']);
=======
//Route::group(['prefix'=>'usuarios', 'where'=>['id'=>'[0-9]+']], function (){
//
//    Route::get('',['as'=>'usuarios','uses'=>'UsuarioController@index']);
//    Route::get('create',['as'=>'usuarios.create','uses'=>'UsuarioController@create']);
//    Route::post('store',['as'=>'usuarios.store','uses'=>'UsuarioController@store']);
//    Route::get('{id}/destroy',['as'=>'usuarios.destroy','uses'=>'UsuarioController@destroy']);
//    Route::get('{id}/edit',['as'=>'usuarios.edit','uses'=>'UsuarioController@edit']);
//    Route::put('{id}/update',['as'=>'usuarios.update','uses'=>'UsuarioController@update']);
//});

Route::group(['prefix'=>'users', 'where'=>['id'=>'[0-9]+']], function (){

    Route::get('',['as'=>'users','uses'=>'UserController@index']);
    Route::get('create',['as'=>'users.create','uses'=>'UserController@create']);
    Route::post('store',['as'=>'users.store','uses'=>'UserController@store']);
    Route::get('{id}/destroy',['as'=>'users.destroy','uses'=>'UserController@destroy']);
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    Route::get('{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit']);
    Route::put('{id}/update',['as'=>'users.update','uses'=>'UserController@update']);
});


<<<<<<< HEAD

=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
Route::group(['prefix'=>'alunos', 'where'=>['id'=>'[0-9]+']], function (){

    Route::get('',['as'=>'alunos','uses'=>'AlunoController@index']);
    Route::get('create',['as'=>'alunos.create','uses'=>'AlunoController@create']);
    Route::post('store',['as'=>'alunos.store','uses'=>'AlunoController@store']);
    Route::get('{id}/destroy',['as'=>'alunos.destroy','uses'=>'AlunoController@destroy']);
    Route::get('{id}/edit',['as'=>'alunos.edit','uses'=>'AlunoController@edit']);
    Route::put('{id}/update',['as'=>'alunos.update','uses'=>'AlunoController@update']);
<<<<<<< HEAD
   Route::get('busca-nome/{nome?}', 'AlunoController@busca')-> name ('busca-nome');

});


=======
});

>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
Route::group(['prefix'=>'matriculas', 'where'=>['id'=>'[0-9]+']], function (){

    Route::get('',['as'=>'matriculas','uses'=>'MatriculaController@index']);
    Route::get('create/{id}',['as'=>'matriculas.create','uses'=>'MatriculaController@create']);
    Route::post('store',['as'=>'matriculas.store','uses'=>'MatriculaController@store']);
    Route::get('{id}/destroy',['as'=>'matriculas.destroy','uses'=>'MatriculaController@destroy']);
    Route::get('{id}/edit',['as'=>'matriculas.edit','uses'=>'MatriculaController@edit']);
    Route::put('{id}/update',['as'=>'matriculas.update','uses'=>'MatriculaController@update']);
});

Route::group(['prefix'=>'salas', 'where'=>['id'=>'[0-9]+']], function (){

    Route::get('',['as'=>'salas','uses'=>'SalaController@index']);
    Route::get('create',['as'=>'salas.create','uses'=>'SalaController@create']);
    Route::post('store',['as'=>'salas.store','uses'=>'SalaController@store']);
    Route::get('{id}/destroy',['as'=>'salas.destroy','uses'=>'SalaController@destroy']);
    Route::get('{id}/edit',['as'=>'salas.edit','uses'=>'SalaController@edit']);
    Route::put('{id}/update',['as'=>'salas.update','uses'=>'SalaController@update']);
});


<<<<<<< HEAD
Route::group(['prefix'=>'chamadas', 'where'=>['id'=>'[0-9]+']], function (){

    Route::get('{sala_id}',['as'=>'chamadas.index','uses'=>'ChamadaController@indexx']);
//    Route::get('{creche_id}',['as'=>'chamadas.index','uses'=>'ChamadaController@index']);
    Route::get('/realizar-chamada/{presenca}/{falta}/{data}',['as'=>'realizar-chamada','uses'=>'ChamadaController@realizarChamada']);
   Route::get('LP/{sala_id}',['as'=>'chamadas','uses'=>'ChamadaController@listaPresenca']);

});
=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
