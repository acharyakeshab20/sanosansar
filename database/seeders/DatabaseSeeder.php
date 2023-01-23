<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\product;
use App\Models\User;
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
//         \App\Models\Teacher::factory(20)->create();
//         product::factory(2000)->create();
//                 product::factory(2000)->create();
        User::factory(2000)->create();
//         \App\Models\Teacher::factory(1)->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
