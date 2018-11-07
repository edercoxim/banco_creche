<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable=['ano', 'usuario_id'];


    protected $table = 'salas';

    public function matricula()
    {
        return $this->hasMany('creche\Matricula');
    }

    public function usuario()
    {
        return $this->hasOne('creche\usuario');
    }


}