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

        return $this->belongsTo(Aluno::class);
    }

    public function sala()
    {

        return $this->belongsTo(Sala::class);
    }

}
