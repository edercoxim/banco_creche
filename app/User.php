<?php

namespace creche;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasDefender;

    const ADMIN = 'Admin';
    const COORDENADOR = 'Coordenador';
    const PROFESSOR = 'Professor';
    const ATENDENTE = 'Atendente';


    protected $fillable = [
        'id','name', 'email', 'password', 'cpf','endereco','telefone','tipoUser','creche_id'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sala()
    {
        return $this->hasOne(Sala::class)->with('user');
    }

    public function creche()
    {

        return $this->belongsTo(Creche::class);
    }


}
