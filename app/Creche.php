<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Creche extends Model
{
    protected $fillable = ['nome','endereco','bairro','diretor'];


public function usuario()
{

    return $this->hasMany('creche\Usuario');
}
}