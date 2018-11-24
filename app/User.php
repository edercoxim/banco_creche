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
    const PROFESSOR = 'Professor';
    const ATENDENTE = 'Atendente';
    const COORDENADOR = 'Coordenador';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password', 'cpf','endereco','telefone','tipoUser','creche_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
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
