<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'phone_number' => '612345678', 
            'password' => Hash::make('admin123'), 
            'role' => 'admin',
            'email' => 'admin@example.com',
        ]);
    }
}
 