<?php

namespace creche\Http\Controllers;

use creche\Http\Requests\UsuarioRequest;
use creche\Usuario;
use Illuminate\Http\Request;
use creche\Creche;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $usuarios = Usuario::all();
        $creches = Creche::all();
        //dd($users->toArray());
        return view('users.index',['users'=>$usuarios, 'creches'=>$creches]);
    }

    public function create(){
        $creches = Creche::all();
        return view('users.create',['creches'=>$creches]);
    }

    public function store(UsuarioRequest $request){
        $input = $request->all();
        Usuario::create($input);
        return redirect()->route('users');
    }

    public function destroy($id){
        Usuario::find($id)->delete();
        return redirect()->route('users');
    }

    public function edit($id){
        $usuario = Usuario::find($id);
        return view('users.edit',compact('usuario'));
    }

    public function update(UsuarioRequest $request, $id){
        $usuario = Usuario::find($id)->update($request->all());
        return redirect()->route('users');
    }

}
