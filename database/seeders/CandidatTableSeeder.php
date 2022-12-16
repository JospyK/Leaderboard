<?php

namespace Database\Seeders;

use App\Models\Candidat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidats = [
            [
                'id'             => 1,
                'nom'           => 'Abdou Aziz SOBABE',
                'projet'           => 'SIM-H',
                'categorie'          => 1,
            ],
        ];

        Candidat::insert($candidats);

    }
}
