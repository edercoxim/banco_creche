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
<<<<<<< HEAD
    const COORDENADOR = 'Coordenador';
    const PROFESSOR = 'Professor';
    const ATENDENTE = 'Atendente';

=======
    const PROFESSOR = 'Professor';
    const ATENDENTE = 'Atendente';
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce

    protected $fillable = [
<<<<<<< HEAD
        'id','name', 'email', 'password', 'cpf','endereco','telefone','tipoUser','creche_id'
=======
        'name', 'email', 'password','cpf','endereco','telefone','creche_id'
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

<<<<<<< HEAD

    public function sala()
    {
        return $this->hasOne(Sala::class)->with('user');
=======
    public function sala()
    {
        return $this->hasOne(Sala::class);
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function creche()
    {

        return $this->belongsTo(Creche::class);
    }
<<<<<<< HEAD


=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
}
