<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'dataNasc',
        'mae',
        'pai',
        'telResponsavel',
        'creche_id'
    ];

    protected $table = 'alunos';

    public function matricula()
    {

        return $this->hasMany(Matricula::class)->with('sala')
            ->orderBy('id','desc')->limit(1);
        //acrescentei aki
    }

    public function historico()
    {

        return $this->hasMany(Matricula::class)->with('sala')
            ->orderBy('id','desc');
        //acrescentei aki
    }

    public function creche()
    {
        return $this->belongsTo(Creche::class);
                     ////aumentei aki 10.11.18  ----->with('matricula')
    }
}


