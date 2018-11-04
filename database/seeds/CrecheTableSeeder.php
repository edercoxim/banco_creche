<?php

use creche\Creche;
use Illuminate\Database\Seeder;

class CrecheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }

    public function criarCreche()
    {
        Creche::create([
            "id" =>1,
            "nome" =>"EDER SOARES",
            "endereco" =>"av. olivo kohl,985",
            "bairro" =>"Jardim Aeroporto",
            "diretor" =>"Elson",

        ]);

    }
}
