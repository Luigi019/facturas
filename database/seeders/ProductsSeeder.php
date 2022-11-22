<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'name' => 'Admin',

            'email' => 'admin@admin.com',

            'password' => bcrypt('123456'),

        ]);
    }
}
