<?php

namespace creche\Http\Controllers;

use Illuminate\Http\Request;

class CoordController extends Controller
{
    public function __construct()
    {
        $this->middleware('needsRole:Coordenador,true');
    }

    private $totalpage = 10;
    public function store(Request $request)
    {

        $user = new User();
        //

        $user->name = $request->input('name');
        $user->cpf = $request->input('cpf');
        $user->email = $request->input('email');
        $user->endereco = $request->input('endereco');
        $user->telefone = $request->input('telefone');
        $user->tipoUser = $request->input('tipoUser');
        $user->creche_id = $request->input('creche_id');
        $user->password = bcrypt($request->input('password'));


        $regra = '';

        if($request->input('regra') == 'Professor'){
            $regra = User::PROFESSOR;
        }elseif ($request->input('regra') == 'Atendente'){
            $regra = User::ATENDENTE;
        }

        $user->tipoUser = $regra;

        $user->save();
        $user->attachRole(Defender::findRole($regra));
        return redirect(route('users'));

    }

    public function index()
    {
        $users = User::paginate($this->totalpage);
        $creches = Creche::all();
        return view('users.index',['users'=>$users, 'creche'=>$creches]);
    }

    public function create()
    {
        $creches = Creche::all();
        // dd($creches->toArray());
        return view('users.create',['creches'=>$creches]);
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('users');
    }
}
