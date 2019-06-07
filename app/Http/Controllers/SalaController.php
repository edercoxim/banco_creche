<?php

namespace creche\Http\Controllers;

<<<<<<< HEAD
use creche\Creche;
use creche\Http\Requests\SalaRequest;
use creche\Matricula;
use creche\User;
use Illuminate\Http\Request;
use creche\Sala;

=======
use creche\Http\Requests\SalaRequest;
use creche\User;
use creche\Usuario;
use Illuminate\Http\Request;
use creche\Sala;
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
class SalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
<<<<<<< HEAD
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
            $perfilUsuarioLogado=$d->tipoUser;
            $crecheUsuario=$d->creche_id;
            //var_dump($perfilUsuarioLogado);
            //var_dump('creche do Usuario :',$crecheUsuario);

        }
        if ($perfilUsuarioLogado == "Admin" )
        {
           // var_dump($perfilUsuarioLogado);
            $creches=Creche::all();
            $salas=Sala::all();
            $users=User::all();
        } else if ($perfilUsuarioLogado == "Atendente")
        {
//var_dump('sou atendente');
//            $salas=Sala::all();
            $creches=Creche::all();
            $salas = Sala::where('creche_id', '=', $crecheUsuario)->get();
            $users=User::all();
        } else //($perfilUsuarioLogado == "Professor")
        {
            $creches=Creche::all();
            $salas=Sala::where('user_id', auth()->user()->getAuthIdentifier())->get();
            //$salas=Sala::all();
            //   dd($salas->toArray());
            $users=User::all();
        }

        return view('salas.index', ['salas'=>$salas, 'users'=>$users, 'creches'=>$creches]);
    }

    public function create()
    {
        $creches=Creche::all();
        $salas=Sala::all();
        $users=User::all();
        return view('salas.create', ['creches'=>$creches, 'salas'=>$salas, 'users'=>$users]);
    }

    public function store(SalaRequest $request)
    {
        $input=$request->all();
=======
        $salas = Sala::all();
        $users = User::all();
        return view('salas.index',['salas'=>$salas, 'users'=>$users]);
    }

    public function create(){
        $salas = Sala::all();
        $users = User::all();
        return view('salas.create', ['salas'=>$salas, 'users'=>$users]);
    }

    public function store(SalaRequest $request){
        $input = $request->all();
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        Sala::create($input);
        return redirect()->route('salas');
    }

<<<<<<< HEAD
    public function destroy($id)
    {
=======
    public function destroy($id){
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        Sala::find($id)->delete();
        return redirect()->route('salas');
    }

<<<<<<< HEAD
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

//    public function chamar($id)
//    {
//        $salas = Sala::where('creche_id', '=', $creche_id)->get();
//        return view('salas.index', ['salas'=>$salas, 'users'=>$users]);
//    }

=======
    public function edit($id){
        $sala = Sala::find($id);
        return view('salas.edit',compact('sala'));
    }

    public function update(SalaRequest $request, $id){
        $sala = Sala::find($id)->update($request->all());
        return redirect()->route('salas');
    }
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
}
