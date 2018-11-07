<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;


class Matricula extends Model
{
    protected $fillable = [
        'dataMatric',
        'aluno_id',
        'sala_id'
    ];

    public function aluno()
    {

        return $this->belongsTo('creche\Aluno');
    }

    public function sala()
    {

        return $this->belongsTo('creche\Sala');
    }

}
