<?php

use Artesaos\Defender\Facades\Defender;
use creche\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->criarAdmin();
    }

    public function criarAdmin()
    {
    User::create([
        "name" =>"EDER SOARES",
        "email" =>"edersonoriza@gmail.com",
        "cpf" =>"56279035115",
        "endereco" =>"av. olivo kohl-985",
        "telefone" =>"67 999516700",
        "creche_id" =>1,
        "password" => bcrypt("123456")
    ])->attachRole(Defender::findRole(User::ADMIN));

    }
}
