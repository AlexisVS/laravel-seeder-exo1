<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
            [
                "nom" => "cactus",
                "prenom" => "bg",
                "age" => 25,
            ],
        ]);
    }
}
