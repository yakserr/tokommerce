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
                'slug' => Str::slug($this->name),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Electronic',
                'slug' => Str::slug($this->name),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Fashion',
                'slug' => Str::slug($this->name),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Health Care',
                'slug' => Str::slug($this->name),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Food & Drink',
                'slug' => Str::slug($this->name),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ],
            [
                'name' => 'Sports',
                'slug' => Str::slug($this->name),
                'description' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
            ]
        );
    }
}
