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
         \App\Models\Teacher::factory(20)->create();

//         \App\Models\Teacher::factory(1)->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
