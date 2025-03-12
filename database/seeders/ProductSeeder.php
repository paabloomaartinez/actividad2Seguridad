<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop Gamer',
                'description' => 'Una laptop potente para juegos.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Teclado Mecánico RGB',
                'description' => 'Teclado con retroiluminación RGB y switches mecánicos.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mouse Inalámbrico',
                'description' => 'Mouse ergonómico con batería de larga duración.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
