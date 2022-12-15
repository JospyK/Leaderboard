<?php

namespace Database\Seeders;

use App\Models\Candidat;
use App\Models\User;
use Database\Factories\CandidatFactory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);

        Candidat::factory(10)->create();


    }
}
