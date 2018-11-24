<?php

namespace creche\Http\Controllers;

use creche\Http\Requests\SalaRequest;
use creche\Matricula;
use creche\User;
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
        if(User::COORDENADOR){
            $salas = Sala::all();
        }else
//        $userLogado = auth()->user();
//        $creche_id = $userLogado->creche_id;
//          dd($userLogado);
//        if($creche_id > 0 ){
//          $salas = Sala::where('creche_id', '=', $creche_id)->get();
//          $salas = Matricula::where('creche_id', '=', $creche_id)->get();
//        dd($salas);
//        }else
        $u=User::where('id', auth()->user()->getAuthIdentifier())->get();
        foreach ($u as $d) {
            $perfilUsuarioLogado = $d->tipoUser;
            var_dump($perfilUsuarioLogado);
        }
        $salas=Sala::where('user_id', auth()->user()->getAuthIdentifier())->get();
        //$salas=Sala::all();
     //   dd($salas->toArray());
        $users=User::all();
        return view('salas.index', ['salas'=>$salas, 'users'=>$users]);
    }

    public function create()
    {
        $salas=Sala::all();
        $users=User::all();
        return view('salas.create', ['salas'=>$salas, 'users'=>$users]);
    }

    public function store(SalaRequest $request)
    {
        $input=$request->all();
        Sala::create($input);
        return redirect()->route('salas');
    }

    public function destroy($id)
    {
        Sala::find($id)->delete();
        return redirect()->route('salas');
    }

    public function edit($id)
    {
        $sala=Sala::find($id);
        return view('salas.edit', compact('sala'));
    }

    public function update(SalaRequest $request, $id)
    {
        $sala=Sala::find($id)->update($request->all());
        return redirect()->route('salas');
    }

}
