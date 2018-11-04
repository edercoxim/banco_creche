<?php

namespace creche;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable=['ano', 'user_id'];


    protected $table = 'salas';

    public function matricula()
    {
        return $this->hasMany(Matricula::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }


}