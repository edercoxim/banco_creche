<?php

namespace creche\Http\Controllers;

<<<<<<< HEAD
use Artesaos\Defender\Facades\Defender;
use creche\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use creche\User;
use creche\Creche;
use Illuminate\Support\Facades\Hash;
=======
use creche\Http\Requests\UserRequest;
use Illuminate\Http\Request;
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
<<<<<<< HEAD
    private $totalpage = 10;

    public function index()
    {
        $users = User::paginate($this->totalpage);
        //$creches = Creche::all();
        //dd($users->toArray());
        return view('users.index',['users'=>$users]);
    }

    public function create()
    {
=======


    public function index()
    {
        $users = User::all();
        $creches = Creche::all();
        return view('users.index',['users'=>$users, 'creches'=>$creches]);
    }

    public function create(){
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        $creches = Creche::all();
        return view('users.create',['creches'=>$creches]);
    }

    public function store(UserRequest $request){
        $input = $request->all();
        User::create($input);
        return redirect()->route('users');
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('users');
    }

    public function edit($id){
<<<<<<< HEAD
        $creches = Creche::all();
        $user = User::find($id);
        return view('users.edit',compact('user', 'creches',$creches));
    }

    public function update(Request $request, $id)
    {

        $user =  User::find($id);

        $user->name = $request->input('name');
        $user->cpf = $request->input('cpf');
        $user->email = $request->input('email');
        $user->endereco = $request->input('endereco');
        $user->telefone = $request->input('telefone');
        $user->tipoUser = $request->input('tipoUser');
        $user->creche_id = $request->input('creche_id');



        $regra = '';

        if($request->input('regra') == 'Admin'){
            $regra = User::ADMIN;
        }elseif ($request->input('regra') == 'Professor'){
            $regra = User::PROFESSOR;
        }elseif ($request->input('regra') == 'Atendente'){
            $regra = User::ATENDENTE;
        }elseif ($request->input('regra') == 'Coordenador'){
            $regra = User::COORDENADOR;
        }

        $user->tipoUser = $regra;

        $user->save();
        $user->attachRole(Defender::findRole($regra));
        return redirect(route('users'));

    }


=======
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }

    public function update(UserRequest $request, $id){
        $user = User::find($id)->update($request->all());
        return redirect()->route('users');
    }
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
}
