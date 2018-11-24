<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;


class Matricula extends Model
{
    protected $fillable = [
        'dataMatric',
        'aluno_id',
        'sala_id',
        'creche_id',
    ];

    public function aluno()
    {

        return $this->belongsTo(Aluno::class);
//        aumentei aki 09/11  ->with('matricula')
    }

    public function sala()
    {

        return $this->belongsTo(Sala::class);
    }

    public function creche()
    {
        return $this->belongsTo(Creche::class);
    }

    public function chamada(){
        return $this->hasMany(Chamada::class);
    }

}
