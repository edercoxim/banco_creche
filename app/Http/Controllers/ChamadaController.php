<?php

namespace creche\Http\Controllers;

use creche\Aluno;
use creche\Chamada;
use creche\Matricula;
use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    public function index($sala_id)
    {
        $alunos=Matricula::where('sala_id', '=', $sala_id)->with('aluno')->get();
        // dd($alunos->toArray());
        return view('chamadas.index', ['alunos'=>$alunos]);
    }

    public function realizarChamada($presenca, $falta, $data)
    {
        $arrayPresenca=explode(',', $presenca);
        $arrayFalta=explode(',', $falta);

        if (sizeof($arrayPresenca) > 0) {
            foreach ($arrayPresenca as $p=>$v) {
                $chamada=new Chamada();
                $chamada->dia=$data;
                $chamada->presenca=true;
                $chamada->matricula_id=$v;
                $chamada->save();
            }
        }

        if (sizeof($arrayFalta) > 0) {
            foreach ($arrayFalta as $p=>$v) {
                $chamada=new Chamada();
                $chamada->dia=$data;
                $chamada->presenca=false;
                $chamada->matricula_id=$v;
                $chamada->save();
            }
        }

        return 'Chamada realizada com sucesso';

    }

}
