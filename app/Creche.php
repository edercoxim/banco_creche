<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Creche extends Model
{
<<<<<<< HEAD
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


=======
    protected $fillable = ['nome','endereco','bairro','diretor'];


public function user()
{

    return $this->hasMany(User::class);
}
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
}