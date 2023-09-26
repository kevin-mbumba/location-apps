<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatutLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("statut_locations")->insert([

            ["nom"=>"En attente"],
            ["nom"=>"En cours"],
            ["nom"=>"Terminée"],
            
        ]);
    }
}
