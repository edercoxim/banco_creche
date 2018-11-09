<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome','cpf','endereco','telefone','tipoUsuario','creche_id'];

    public function sala()
    {
        return $this->hasOne(Sala::class)->with('usuario');
    }

    public function creche()
    {

        return $this->belongsTo(Creche::class);//->with('usuario')
    }

}
