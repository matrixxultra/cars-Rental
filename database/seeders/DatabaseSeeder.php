<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('marques')->insert([
            [
                "name"=>"Mercedes Benz",
                "image"=>"SOON"
            ],
            [
                "name"=>"Lamborgini",
                "image"=>"SOON"
            ]
            ]);
        DB::table('categories')->insert([
            ["gamme"=>"Haute Gamme"],
            ['gamme'=>"Moyen Gamme"]
        ]);
        DB::table("admins")->insert([
            "name"=>"Aghbalou",
            "prenom"=>"idriss",
            "email"=>"idriss@gmail.com",
            
            "password"=>Hash::make("123")
        ]);
        DB::table('voitures')->insert([
            "categorie_id"=>1,
            "marque_id"=>1,
            "modele"=>'MAYBACH',
            "année"=>2025,
            "color"=>"black",

        ]);
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
