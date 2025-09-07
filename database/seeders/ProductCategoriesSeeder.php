<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'Laptops',
                'description' => 'Various types of laptops including gaming, business, and personal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphones',
                'description' => 'Latest models of smartphones from various brands.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tablets',
                'description' => 'Tablets for work and entertainment.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accessories',
                'description' => 'Tech accessories such as chargers, cases, and headphones.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PC Components',
                'description' => 'Components like motherboards, GPUs, CPUs, etc.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Networking Equipment',
                'description' => 'Routers, modems, and other networking devices.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gaming Consoles',
                'description' => 'Consoles such as PlayStation, Xbox, and Nintendo Switch.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
