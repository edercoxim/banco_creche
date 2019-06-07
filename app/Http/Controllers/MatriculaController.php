<?php

namespace creche\Http\Controllers;

<<<<<<< HEAD
use creche\Creche;
=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
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
<<<<<<< HEAD
        $matriculas = Matricula::with('aluno')->get();
       $alunos = Aluno::all();
        $salas = Sala::all();
      // $creches = Creche::all();
        //dd($matriculas->toArray());

=======
        $matriculas=Matricula::all();
        $alunos = Aluno::all();
        $salas = Sala::all();
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        return view('matriculas.index', ['matriculas'=>$matriculas, 'alunos'=>$alunos, 'salas'=>$salas]);

    }

    public function create($id)
    {
<<<<<<< HEAD
       //dd($id);
        $alunos = Aluno::all();
        $salas = Sala::all();
        $creches = Creche::all();
        return view('matriculas.create',compact('alunos','salas', 'id','creches'));
=======
//        dd($id);
        $alunos = Aluno::all();
        $salas = Sala::all();
        return view('matriculas.create',compact('alunos', 'salas', 'id'));
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
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
