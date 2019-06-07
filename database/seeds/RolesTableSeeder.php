<?php

use Artesaos\Defender\Facades\Defender;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Defender::createRole('Admin');
        Defender::createRole('Professor');
        Defender::createRole('Atendente');
<<<<<<< HEAD
        Defender::createRole('Coordenador');
=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
    }
}
