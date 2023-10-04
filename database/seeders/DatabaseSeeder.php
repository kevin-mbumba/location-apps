<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Client;
use App\Models\Article;
use App\Models\TypeArticle;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Database\Seeders\TypeArticleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    
    {
        $this->call([
            TypeArticleSeeder::class, 
            StatutLocationSeeder::class, 
            RoleSeeder::class, 
            PermissionSeeder::class,
            DureeLocationSeeder::class
        ]);

        Article::factory(10)->create();
        Client::factory(10)->create();
        User::factory(10)->create();
        
    }
}
