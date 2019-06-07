<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
<<<<<<< HEAD
    protected $fillable=['ano', 'turma', 'user_id', 'creche_id'];
=======
    protected $fillable=['ano', 'user_id'];
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce


    protected $table = 'salas';

    public function matricula()
    {
<<<<<<< HEAD
  //      return $this->hasMany(Matricula::class);
      return $this->hasMany(Matricula::class)->with('aluno');
=======
        return $this->hasMany(Matricula::class);
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function user()
    {
<<<<<<< HEAD
        return $this->belongsTo(User::class);
    }

    public function creche()
    {
        return $this->belongsTo(Creche::class);
=======
        return $this->hasOne(User::class);
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }


}