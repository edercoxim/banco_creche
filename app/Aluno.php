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
        'telResponsavel'];

    protected $table = 'alunos';

    public function matricula()
    {


        return $this->hasMany(Matricula::class);
    }
}


