<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\ProductSeeder; // Importar el seeder

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario admin
        User::factory()->create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'phone_number' => '612345678',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'email' => 'admin@example.com',
        ]);

        // Ejecutar el seeder de productos
        $this->call(ProductSeeder::class);
    }
}
