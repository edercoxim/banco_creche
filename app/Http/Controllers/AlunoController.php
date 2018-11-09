<?php

namespace creche\Http\Controllers;

use creche\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;
use creche\Aluno;
use creche\Matricula;
use Illuminate\Support\Facades\Input;

class AlunoController extends Controller
{

    /**
     * @return $this
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index',['alunos'=>$alunos]);
    }

    public function create(){
        return view('alunos.create');
    }

    public function store(AlunoRequest $request){
        $input = $request->all();
        Aluno::create($input);
        return redirect()->route('alunos');
    }

    public function destroy($id){
        Aluno::find($id)->delete();
        return redirect()->route('alunos');
    }

    public function edit($id){
        $aluno = Aluno::find($id);
        return view('alunos.edit',compact('aluno'));
    }

    public function update(AlunoRequest $request, $id){
        $aluno = Aluno::find($id)->update($request->all());
        return redirect()->route('alunos');
    }

    public function busca(Request $request)
    {
       // dd($request->input('nome'));
        $nome = Input::get('nome');
        $alunos = Aluno::where ('nome', 'LIKE', $request->input('nome') .'%')->get();
       // dd($alunos->toArray());
    return view('alunos.mostrar', compact('alunos'));
    }
//
}


