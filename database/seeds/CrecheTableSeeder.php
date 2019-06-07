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
<<<<<<< HEAD
     $this->criarCreche();
=======
        //
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }

    public function criarCreche()
    {
        Creche::create([
<<<<<<< HEAD

            "nome" =>"Creche SR Divino",
            "endereco" =>"av. olivo kohl,985",
            "bairro" =>"Jardim Aeroporto",
            "diretor" =>"Elson"
=======
            "id" =>1,
            "nome" =>"EDER SOARES",
            "endereco" =>"av. olivo kohl,985",
            "bairro" =>"Jardim Aeroporto",
            "diretor" =>"Elson",
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce

        ]);

    }
}
