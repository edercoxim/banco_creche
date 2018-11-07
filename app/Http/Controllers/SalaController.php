<?php

namespace creche\Http\Controllers;

use creche\Http\Requests\SalaRequest;
use creche\Usuario;
use Illuminate\Http\Request;
use creche\Sala;
class SalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $salas = Sala::all();
        $usuarios = Usuario::all();
        return view('salas.index',['salas'=>$salas, 'usuarios'=>$usuarios]);
    }

    public function create(){
        $salas = Sala::all();
        $usuarios = Usuario::all();
        return view('salas.create', ['salas'=>$salas, 'usuarios'=>$usuarios]);
    }

    public function store(SalaRequest $request){
        $input = $request->all();
        Sala::create($input);
        return redirect()->route('salas');
    }

    public function destroy($id){
        Sala::find($id)->delete();
        return redirect()->route('salas');
    }

    public function edit($id){
        $sala = Sala::find($id);
        return view('salas.edit',compact('sala'));
    }

    public function update(SalaRequest $request, $id){
        $sala = Sala::find($id)->update($request->all());
        return redirect()->route('salas');
    }
}
