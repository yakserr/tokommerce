<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create(
            [
                'name' => 'Apps & Games',
                // generate slug from name
                'slug' => Str::slug('Apps & Games'),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Electronic',
                'slug' => Str::slug('Electronic'),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Fashion',
                'slug' => Str::slug('Fashion'),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Health Care',
                'slug' => Str::slug('Health Care'),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Food & Drink',
                'slug' => Str::slug('Food & Drink'),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Sports',
                'slug' => Str::slug('Sports'),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ]
        );
    }
}
