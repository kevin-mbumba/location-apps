<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("type_articles")->insert([

            ["nom"=>"Voiture"],
            ["nom"=>"Immobilier"],
            ["nom"=>"Appareils Electroniques"],
            ["nom"=>"Salle"]

        ]);
    }
}
