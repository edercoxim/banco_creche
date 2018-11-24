<?php

namespace creche\Http\Controllers;

use creche\Creche;
use creche\Http\Requests\MatriculaRequest;
use creche\Sala;
use Illuminate\Http\Request;
use creche\Matricula;
use creche\Aluno;


class MatriculaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $matriculas = Matricula::with('aluno')->get();
       $alunos = Aluno::all();
        $salas = Sala::all();
      // $creches = Creche::all();
        //dd($matriculas->toArray());

        return view('matriculas.index', ['matriculas'=>$matriculas, 'alunos'=>$alunos, 'salas'=>$salas]);

    }

    public function create($id)
    {
       //dd($id);
        $alunos = Aluno::all();
        $salas = Sala::all();
        $creches = Creche::all();
        return view('matriculas.create',compact('alunos','salas', 'id','creches'));
    }

    public function store(MatriculaRequest $request)
    {

        $input=$request->all();
//        dd($input);
        Matricula::create($input);
        return redirect()->route('matriculas');
    }

    public function destroy($id)
    {
        Matricula::find($id)->delete();
        return redirect()->route('matriculas');
    }

    public function edit($id)
    {
        $matricula=Matricula::find($id);
        return view('matriculas.edit', compact('matricula'));
    }

    public function update(MatriculaRequest $request, $id)
    {
        $matricula=Matricula::find($id)->update($request->all());
        return redirect()->route('matriculas');
    }



}
