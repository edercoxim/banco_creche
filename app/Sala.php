<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable=['ano', 'turma', 'user_id', 'creche_id'];


    protected $table = 'salas';

    public function matricula()
    {
  //      return $this->hasMany(Matricula::class);
      return $this->hasMany(Matricula::class)->with('aluno');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function creche()
    {
        return $this->belongsTo(Creche::class);
    }


}