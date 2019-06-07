<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    protected $fillable=['dia', 'matricula_id', 'presenca'];

    protected $table = 'chamada';

    public function matricula(){
        return $this->belongsTo(Matricula::class)->with('aluno');
    }


}
