<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Creche extends Model
{
    protected $fillable=['nome', 'endereco', 'bairro', 'diretor'];


    public function user()
    {

        return $this->hasMany(User::class);
    }

    public function aluno()
    {
        return $this->hasMany(Aluno::class);
        /////
    }

    public function matricula()
    {
        return $this->hasMany(Matricula::class);
    }

    public function sala()
    {
        return $this->hasMany(Sala::class);
    }


}