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
     $this->criarCreche();
    }

    public function criarCreche()
    {
        Creche::create([

            "nome" =>"Creche SR Divino",
            "endereco" =>"av. olivo kohl,985",
            "bairro" =>"Jardim Aeroporto",
            "diretor" =>"Elson"

        ]);

    }
}
