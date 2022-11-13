<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\ProductCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'birthday' => '1990-01-01',
                'gender'    => 'male',
                'phone' => '0123456789',
                'password' => Hash::make('password') // password,
            ]
        );

        $this->call(ProductCategorySeeder::class);

        // php artisan laravolt:indonesia:seed for seeding data indonesia region (province, city, district, village)
        \Artisan::call('laravolt:indonesia:seed');
    }
}
