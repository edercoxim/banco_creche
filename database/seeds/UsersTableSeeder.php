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
<<<<<<< HEAD
       $this->criarCoord();
       $this->criarProf();
       $this->criarAten();
=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function criarAdmin()
    {
    User::create([
<<<<<<< HEAD
        "name" =>"EDER SOARES ADMININISTRADOR",
=======
        "name" =>"EDER SOARES",
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        "email" =>"edersonoriza@gmail.com",
        "cpf" =>"56279035115",
        "endereco" =>"av. olivo kohl-985",
        "telefone" =>"67 999516700",
<<<<<<< HEAD
=======
        "creche_id" =>1,
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        "password" => bcrypt("123456")
    ])->attachRole(Defender::findRole(User::ADMIN));

    }
<<<<<<< HEAD

    public function criarCoord()
    {
        User::create([
            "name" =>"EDER SOARES COORDENADOR",
            "email" =>"edersonoriza@gmail.com",
            "cpf" =>"56279035115",
            "endereco" =>"av. olivo kohl-985",
            "telefone" =>"67 999516700",
            "password" => bcrypt("123456")
        ])->attachRole(Defender::findRole(User::COORD));

    }

    public function criarProf()
    {
        User::create([
            "name" =>"EDER SOARES PROF",
            "email" =>"user@gmail.com",
            "cpf" =>"56279035116",
            "endereco" =>"av. olivo kohl-985",
            "telefone" =>"67 999516700",
            "password" => bcrypt("123456"),
            "creche_id" =>1
        ])->attachRole(Defender::findRole(User::PROFESSOR));

    }

    public function criarAten()
    {
        User::create([
            "name" =>"Sandra Ap ATENDENTE",
            "email" =>"sandra@gmail.com",
            "cpf" =>"56279035117",
            "endereco" =>"av. olivo kohl-985",
            "telefone" =>"67 999516700",
            "password" => bcrypt("123456"),
            "creche_id" =>1
        ])->attachRole(Defender::findRole(User::ATENDENTE));

    }
=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
}
