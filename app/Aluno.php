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
<<<<<<< HEAD
        'telResponsavel',
        'creche_id'
    ];
=======
        'telResponsavel'];
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce

    protected $table = 'alunos';

    public function matricula()
    {

<<<<<<< HEAD
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
=======

        return $this->hasMany(Matricula::class);
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }
}


