<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mobile;

class MobileSeeder extends Seeder
{
    public function run(): void
    {
        Mobile::insert([
            [
                'name' => 'Samsung Galaxy S21',
                'brand' => 'Samsung',
                'description' => 'Flagship Android smartphone.',
                'price' => 799.99,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 14',
                'brand' => 'Apple',
                'description' => 'Apple\'s latest iPhone model.',
                'price' => 999.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'OnePlus 11',
                'brand' => 'OnePlus',
                'description' => 'Smooth and powerful Android device.',
                'price' => 649.00,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
