<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            "name" => 'Tj',
            "email" => 'tj@gmail.com',
            "password" => bcrypt('password'),
        ]);
        \App\Models\Material::factory(5)->create();
        \App\Models\Product::factory(5)->create();
        \App\Models\PaymentMethod::factory()->create([
            "name" => "cash"
        ]);
        \App\Models\PaymentMethod::factory()->create([
            "name" => "bank"
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
