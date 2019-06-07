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
<<<<<<< HEAD
        //dd($users->toArray());
        return view('users.index',['users'=>$usuarios, 'creches'=>$creches]);
=======
        return view('usuarios.index',['usuarios'=>$usuarios, 'creches'=>$creches]);
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function create(){
        $creches = Creche::all();
<<<<<<< HEAD
        return view('users.create',['creches'=>$creches]);
=======
        return view('usuarios.create',['creches'=>$creches]);
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function store(UsuarioRequest $request){
        $input = $request->all();
        Usuario::create($input);
<<<<<<< HEAD
        return redirect()->route('users');
=======
        return redirect()->route('usuarios');
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function destroy($id){
        Usuario::find($id)->delete();
<<<<<<< HEAD
        return redirect()->route('users');
=======
        return redirect()->route('usuarios');
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function edit($id){
        $usuario = Usuario::find($id);
<<<<<<< HEAD
        return view('users.edit',compact('usuario'));
=======
        return view('usuarios.edit',compact('usuario'));
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function update(UsuarioRequest $request, $id){
        $usuario = Usuario::find($id)->update($request->all());
<<<<<<< HEAD
        return redirect()->route('users');
=======
        return redirect()->route('usuarios');
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

}
