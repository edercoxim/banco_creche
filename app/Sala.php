<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable=['ano', 'usuario_id'];


    protected $table = 'salas';

    public function matricula()
    {
        return $this->hasMany(Matricula::class);
//        return $this->hasMany(Matricula::class)->with(Aluno::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }


}