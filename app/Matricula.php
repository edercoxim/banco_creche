<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;


class Matricula extends Model
{
    protected $fillable = [
        'dataMatric',
        'aluno_id',
<<<<<<< HEAD
        'sala_id',
        'creche_id',
=======
        'sala_id'
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    ];

    public function aluno()
    {

        return $this->belongsTo(Aluno::class);
<<<<<<< HEAD
//        aumentei aki 09/11  ->with('matricula')
=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function sala()
    {

        return $this->belongsTo(Sala::class);
    }

<<<<<<< HEAD
    public function creche()
    {
        return $this->belongsTo(Creche::class);
    }

    public function chamada(){
        return $this->hasMany(Chamada::class);
    }

=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
}
