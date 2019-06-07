<?php

namespace creche\Http\Controllers;

use creche\Aluno;
use creche\Chamada;
use creche\Matricula;
use creche\User;
use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    public function indexx($sala_id)
    {
        $alunos=Matricula::where('sala_id', '=', $sala_id)->with('aluno')->get();
        //dd($alunos->toArray());
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

    public function listaPresenca($sala_id)
    {
        $u=User::where('id', auth()->user()->getAuthIdentifier())->get();
        foreach ($u as $d) {
            $perfilUsuarioLogado=$d->tipoUser;
            $crecheUsuario=$d->creche_id;
            var_dump($perfilUsuarioLogado);
            var_dump('creche do Usuario :', $crecheUsuario);
        }


        //    dd($crecheUsuario);
        $alunos=Matricula::where('creche_id', '=', $crecheUsuario)->with('aluno')->get();
        foreach ($alunos as $als){
           $matriculas= $als->id;
           var_dump('matriculas',$als->id);
    }

        $presenca=Chamada::where('aluno_id', '=', $matriculas);//aki ta o erro
//        foreach ($presenca as $pcs) {
////$presentes= $als->creche_id;
//            var_dump($pcs);
//        }
        //  dd($alunos);
        return view('chamadas.listaChamada', ['alunos'=>$alunos, 'presenca'=>$presenca]);
    }
}

