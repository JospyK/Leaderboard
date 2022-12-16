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
            // DSI INNOVANT
            [
                'id' => 1,
                'nom' => 'Abdou Aziz SOBABE',
                'projet' => 'SIM-H',
                'categorie' => 1,
            ],
            [
                'id' => 2,
                'nom' => 'Alain AHOUNOU',
                'projet' => 'SECUROUTE',
                'categorie' => 1,
            ],
            [
                'id' => 3,
                'nom' => 'ADOM ALASSANE Waïdou',
                'projet' => 'Pyramide',
                'categorie' => 1,
            ],
            [
                'id' => 4,
                'nom' => 'Olivier TOBOSSI',
                'projet' => 'eENCADREMENT PEDAGOGIQUE',
                'categorie' => 1,
            ],
            [
                'id' => 5,
                'nom' => 'Claudia NOUTAIS',
                'projet' => 'Travelliam',
                'categorie' => 1,
            ],

            // DSI RESILIENT
            [
                'id' => 6,
                'nom' => 'Alain AHOUNOU',
                'projet' => 'SECUROUTE',
                'categorie' => 2,
            ],
            [
                'id' => 7,
                'nom' => 'Vincent MEGNIGBETO',
                'projet' => "Ligne d'Assistance au Enfants (LAE)",
                'categorie' => 2,
            ],
            [
                'id' => 8,
                'nom' => 'Claudia NOUTAIS',
                'projet' => 'Travelliam',
                'categorie' => 2,
            ],
            [
                'id' => 9,
                'nom' => 'Tchangole M. Thierry Martial',
                'projet' => 'SATCAPT-C02',
                'categorie' => 2,
            ],
            [
                'id' => 10,
                'nom' => 'Tchangole M. Thierry Martial',
                'projet' => 'GST Bénin',
                'categorie' => 2,
            ],

            // LEADERSHIP FEMININ
            [
                'id' => 11,
                'nom' => 'TOUKOUROU Fassihath',
                'projet' => 'AgroApp Gléhi',
                'categorie' => 3,
            ],
            [
                'id' => 12,
                'nom' => 'Ayodélé OGNIN',
                'projet' => 'BoostYourBusiness',
                'categorie' => 3,
            ],
            [
                'id' => 13,
                'nom' => 'Rolande MONNOU',
                'projet' => 'AllianzNature',
                'categorie' => 3,
            ],
            [
                'id' => 14,
                'nom' => 'Isméne DEGUENONVO',
                'projet' => 'Femme et Internet',
                'categorie' => 3,
            ],

            // CYBERSECURITE
            [
                'id' => 15,
                'nom' => 'DIGITAL WORLD TECHNOLOGIE',
                'projet' => 'DIGITAL WORLD TECHNOLOGIE',
                'categorie' => 4,
            ],
            [
                'id' => 16,
                'nom' => 'Isméne DEGUENONVO',
                'projet' => 'Projet sur la cybersécurité',
                'categorie' => 4,
            ],
            [
                'id' => 17,
                'nom' => 'EXPERTIC',
                'projet' => 'EXPERTIC',
                'categorie' => 4,
            ],

            // GAMING
            [
                'id' => 18,
                'nom' => 'Jonathan DARBOUX',
                'projet' => 'AMAZONE PUZZLE GAME',
                'categorie' => 5,
            ],
            [
                'id' => 19,
                'nom' => 'IBRAHMA GNORRA Isdine',
                'projet' => 'SUPKO',
                'categorie' => 5,
            ],
            [
                'id' => 20,
                'nom' => 'Tchangole M. Thierry Martial',
                'projet' => 'CosmoLAb Magazine',
                'categorie' => 5,
            ],
            [
                'id' => 21,
                'nom' => 'AfriGamers',
                'projet' => "Développer un écosystème de l'e-sport au Bénin",
                'categorie' => 5,
            ],

            // ADMINISTRATION INTELLIGENTE
            [
                'id' => 22,
                'nom' => 'Alain AHOUNOU',
                'projet' => 'SECUROUTE',
                'categorie' => 6,
            ],
            [
                'id' => 23,
                'nom' => 'Paul ACAKPO',
                'projet' => "Plateforme eQuittance d'encaissement des recettes de l'Etat",
                'categorie' => 6,
            ],
            [
                'id' => 24,
                'nom' => 'Olivier TOBOSSI',
                'projet' => 'SIGPC',
                'categorie' => 6,
            ],
            [
                'id' => 25,
                'nom' => 'Wilfried GANDAHO',
                'projet' => 'MODERN-RU-ADMIN',
                'categorie' => 6,
            ],

            // DEVELOPPEUR DE PLATEFORME ET SOLUTIONS LOGICIELLES
            [
                'id' => 26,
                'nom' => 'BOSSOU Eric Dêfodj',
                'projet' => 'tojumi',
                'categorie' => 7,
            ],
            [
                'id' => 27,
                'nom' => 'TOUKOUROU Fassihath',
                'projet' => 'AgroApp Gléhi',
                'categorie' => 7,
            ],
            [
                'id' => 28,
                'nom' => 'BOSSOU Eric Dêfodj',
                'projet' => 'eVodum',
                'categorie' => 7,
            ],
            [
                'id' => 29,
                'nom' => 'ADJINAKOU AKOUAVI REBECCA',
                'projet' => 'DECOUVRIR LES LIVRES AUTREMENT AU 229',
                'categorie' => 7,
            ],

            // LEADER DU SERVICE IT
            [
                'id' => 30,
                'nom' => 'All WEB SERVICE',
                'projet' => 'Artiweb',
                'categorie' => 8,
            ],
            [
                'id' => 31,
                'nom' => 'AGEMA BENIN',
                'projet' => 'AGEMA BENIN',
                'categorie' => 8,
            ],
            [
                'id' => 32,
                'nom' => 'IFE AFRICA',
                'projet' => 'IFE AFRICA',
                'categorie' => 8,
            ],
            [
                'id' => 33,
                'nom' => 'All WEB SERVICE',
                'projet' => 'Kloo',
                'categorie' => 8,
            ],

            // MEILLEURE ECOLE DE FORMATION
            [
                'id' => 34,
                'nom' => 'IFRI',
                'projet' => 'IFRI',
                'categorie' => 9,
            ],
            [
                'id' => 35,
                'nom' => 'cabinet WIN Africa',
                'projet' => 'cabinet WIN Africa',
                'categorie' => 9,
            ],
            [
                'id' => 36,
                'nom' => 'AFRICA DESIGN SCHOOL',
                'projet' => 'AFRICA DESIGN SCHOOL',
                'categorie' => 9,
            ],
            [
                'id' => 37,
                'nom' => 'WOMAN DNS ACADEMY',
                'projet' => 'WOMAN DNS ACADEMY',
                'categorie' => 9,
            ],

            // DEFENSEUR
            [
                'id' => 38,
                'nom' => 'Académie des CyberAmazones',
                'projet' => 'Académie des CyberAmazones',
                'categorie' => 10,
            ],
            [
                'id' => 39,
                'nom' => 'Internet Privacy Weeks',
                'projet' => 'Internet Privacy Weeks',
                'categorie' => 10,
            ],
            [
                'id' => 40,
                'nom' => 'Bénin DNS Forum',
                'projet' => 'Bénin DNS Forum',
                'categorie' => 10,
            ],
        ];

        Candidat::insert($candidats);

    }
}
