<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome','cpf','endereco','telefone','tipoUsuario','creche_id'];

    public function sala()
    {
<<<<<<< HEAD
        return $this->hasOne(Sala::class)->with('usuario');
=======
        return $this->hasOne('creche\sala');
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function creche()
    {

<<<<<<< HEAD
        return $this->belongsTo(Creche::class);//->with('usuario')
=======
        return $this->belongsTo('creche\Creche');
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

}
