<?php

namespace creche\Http\Controllers;

<<<<<<< HEAD
use creche\Creche;
use creche\Http\Requests\AlunoRequest;
use creche\Sala;
use Illuminate\Http\Request;
use creche\Aluno;
use creche\Matricula;
use Illuminate\Support\Facades\Input;
=======
use creche\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;
use creche\Aluno;
use creche\Matricula;
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce

class AlunoController extends Controller
{

<<<<<<< HEAD

    public function __construct()
    {
        $this->middleware('needsRole:Admin,true'||'needsRole:Coordenador,true' || 'needsRole:Atendente,true');

    }

    private $totalpage = 10;

    public function index()
    {
        $alunos = Aluno::paginate($this->totalpage);
        $matriculas = Matricula::all();
        return view('alunos.index',['alunos'=>$alunos, 'matriculas'=>$matriculas]);
    }

    public function create()
    {
        $creches = Creche::all();
        return view('alunos.create', ['creches'=>$creches]);
=======
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
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
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
<<<<<<< HEAD

    public function busca(Request $request)
    {
        $nome = Input::get('nome');
        $alunos = Aluno::with('matricula')
            ->where ('nome', 'LIKE', $request->input('nome') .'%')
            ->get();
//   dd($alunos->toArray());
      return view('alunos.mostrar', compact('alunos'));
    }
//
}


=======
}
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
