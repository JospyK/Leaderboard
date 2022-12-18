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
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 1,
            ],
            [
                'id' => 2,
                'nom' => 'Alain AHOUNOU',
                'projet' => 'SECUROUTE',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 1,
            ],
            [
                'id' => 3,
                'nom' => 'ADOM ALASSANE Waïdou',
                'projet' => 'Pyramide',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 1,
            ],
            [
                'id' => 4,
                'nom' => 'Olivier TOBOSSI',
                'projet' => 'eENCADREMENT PEDAGOGIQUE',
                'vpublic' => 5,
                'total' => 5,
                'categorie' => 1,
            ],
            [
                'id' => 5,
                'nom' => 'Claudia NOUTAIS',
                'projet' => 'Travelliam',
                'vpublic' => 4,
                'total' => 4,
                'categorie' => 1,
            ],

            // DSI RESILIENT
            [
                'id' => 6,
                'nom' => 'Alain AHOUNOU',
                'projet' => 'SECUROUTE',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 2,
            ],
            [
                'id' => 7,
                'nom' => 'Vincent MEGNIGBETO',
                'projet' => "Ligne d'Assistance aux Enfants (LAE)",
                'vpublic' => 5,
                'total' => 5,
                'categorie' => 2,
            ],
            [
                'id' => 8,
                'nom' => 'Claudia NOUTAIS',
                'projet' => 'Travelliam',
                'vpublic' => 4,
                'total' => 4,
                'categorie' => 2,
            ],
            [
                'id' => 9,
                'nom' => 'Tchangole M. Thierry Martial',
                'projet' => 'SATCAPT-C02',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 2,
            ],
            [
                'id' => 10,
                'nom' => 'Tchangole M. Thierry Martial',
                'projet' => 'GST Bénin',
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 2,
            ],

            // LEADERSHIP FEMININ
            [
                'id' => 11,
                'nom' => 'TOUKOUROU Fassihath',
                'projet' => 'AgroApp Gléhi',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 3,
            ],
            [
                'id' => 12,
                'nom' => 'Ayodélé OGNIN',
                'projet' => 'BoostYourBusiness',
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 3,
            ],
            [
                'id' => 13,
                'nom' => 'Rolande MONNOU',
                'projet' => 'AllianzNature',
                'vpublic' => 4,
                'total' => 4,
                'categorie' => 3,
            ],
            [
                'id' => 14,
                'nom' => 'Isméne DEGUENONVO',
                'projet' => 'Femme et Internet',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 3,
            ],

            // CYBERSECURITE
            [
                'id' => 15,
                'nom' => 'DIGITAL WORLD TECHNOLOGIE',
                'projet' => 'DIGITAL WORLD TECHNOLOGIE',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 4,
            ],
            [
                'id' => 16,
                'nom' => 'Isméne DEGUENONVO',
                'projet' => 'Projet sur la cybersécurité',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 4,
            ],
            [
                'id' => 17,
                'nom' => 'EXPERTIC',
                'projet' => 'EXPERTIC',
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 4,
            ],

            // GAMING
            [
                'id' => 18,
                'nom' => 'Jonathan DARBOUX',
                'projet' => 'AMAZONE PUZZLE GAME',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 5,
            ],
            [
                'id' => 19,
                'nom' => 'IBRAHMA GNORRA Isdine',
                'projet' => 'SUPKO',
                'vpublic' => 4,
                'total' => 4,
                'categorie' => 5,
            ],
            [
                'id' => 20,
                'nom' => 'Tchangole M. Thierry Martial',
                'projet' => 'CosmoLAb Magazine',
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 5,
            ],
            [
                'id' => 21,
                'nom' => 'AfriGamers',
                'projet' => "Développer un écosystème de l'e-sport au Bénin",
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 5,
            ],

            // ADMINISTRATION INTELLIGENTE
            [
                'id' => 22,
                'nom' => 'Alain AHOUNOU',
                'projet' => 'SECUROUTE',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 6,
            ],
            [
                'id' => 23,
                'nom' => 'Paul ACAKPO',
                'projet' => "Plateforme eQuittance d'encaissement des recettes de l'Etat",
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 6,
            ],
            [
                'id' => 24,
                'nom' => 'Olivier TOBOSSI',
                'projet' => 'SIGPC',
                'vpublic' => 4,
                'total' => 4,
                'categorie' => 6,
            ],
            [
                'id' => 25,
                'nom' => 'Wilfried GANDAHO',
                'projet' => 'MODERN-RU-ADMIN',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 6,
            ],

            // DEVELOPPEUR DE PLATEFORME ET SOLUTIONS LOGICIELLES
            [
                'id' => 26,
                'nom' => 'BOSSOU Eric Dêfodj',
                'projet' => 'tojumi',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 7,
            ],
            [
                'id' => 27,
                'nom' => 'TOUKOUROU Fassihath',
                'projet' => 'AgroApp Gléhi',
                'vpublic' => 4,
                'total' => 4,
                'categorie' => 7,
            ],
            [
                'id' => 28,
                'nom' => 'BOSSOU Eric Dêfodj',
                'projet' => 'eVodum',
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 7,
            ],
            [
                'id' => 29,
                'nom' => 'ADJINAKOU AKOUAVI REBECCA',
                'projet' => 'DECOUVRIR LES LIVRES AUTREMENT AU 229',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 7,
            ],

            // LEADER DU SERVICE IT
            [
                'id' => 30,
                'nom' => 'All WEB SERVICE',
                'projet' => 'Artiweb',
                'vpublic' => 4,
                'total' => 4,
                'categorie' => 8,
            ],
            [
                'id' => 31,
                'nom' => 'AGEMA BENIN',
                'projet' => 'AGEMA BENIN',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 8,
            ],
            [
                'id' => 32,
                'nom' => 'IFE AFRICA',
                'projet' => 'IFE AFRICA',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 8,
            ],
            [
                'id' => 33,
                'nom' => 'All WEB SERVICE',
                'projet' => 'Kloo',
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 8,
            ],

            // MEILLEURE ECOLE DE FORMATION
            [
                'id' => 34,
                'nom' => 'IFRI',
                'projet' => 'IFRI',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 9,
            ],
            [
                'id' => 35,
                'nom' => 'cabinet WIN Africa',
                'projet' => 'cabinet WIN Africa',
                'vpublic' => 4,
                'total' => 4,
                'categorie' => 9,
            ],
            [
                'id' => 36,
                'nom' => 'AFRICA DESIGN SCHOOL',
                'projet' => 'AFRICA DESIGN SCHOOL',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 9,
            ],
            [
                'id' => 37,
                'nom' => 'WOMAN DNS ACADEMY',
                'projet' => 'WOMAN DNS ACADEMY',
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 9,
            ],

            // DEFENSEUR
            [
                'id' => 38,
                'nom' => 'Académie des CyberAmazones',
                'projet' => 'Académie des CyberAmazones',
                'vpublic' => 1,
                'total' => 1,
                'categorie' => 10,
            ],
            [
                'id' => 39,
                'nom' => 'Internet Privacy Weeks',
                'projet' => 'Internet Privacy Weeks',
                'vpublic' => 3,
                'total' => 3,
                'categorie' => 10,
            ],
            [
                'id' => 40,
                'nom' => 'Bénin DNS Forum',
                'projet' => 'Bénin DNS Forum',
                'vpublic' => 2,
                'total' => 2,
                'categorie' => 10,
            ],
        ];

        Candidat::insert($candidats);
    }
}
