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
        return view('usuarios.index',['usuarios'=>$usuarios, 'creches'=>$creches]);
    }

    public function create(){
        $creches = Creche::all();
        return view('usuarios.create',['creches'=>$creches]);
    }

    public function store(UsuarioRequest $request){
        $input = $request->all();
        Usuario::create($input);
        return redirect()->route('usuarios');
    }

    public function destroy($id){
        Usuario::find($id)->delete();
        return redirect()->route('usuarios');
    }

    public function edit($id){
        $usuario = Usuario::find($id);
        return view('usuarios.edit',compact('usuario'));
    }

    public function update(UsuarioRequest $request, $id){
        $usuario = Usuario::find($id)->update($request->all());
        return redirect()->route('usuarios');
    }

}
