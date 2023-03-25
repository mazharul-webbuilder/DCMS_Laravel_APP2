<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Afran Mahmud',
             'email' => 'sparkengineering16@gmail.com',
             'home_district' => 'Cumilla',
             'password' => '123456',
         ]);
        \App\Models\User::factory()->create([
            'name' => 'Mazharul Islam',
            'email' => 'mazharulislam1998r@gmail.com',
            'home_district' => 'Cumilla',
            'password' => '123456',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Rasel Al Manna',
            'email' => 'rasel@gmail.com',
            'home_district' => 'Cumilla',
            'password' => '123456',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Golam Mostofa',
            'email' => 'mostofa@gmail.com',
            'home_district' => 'Mymansingh',
            'password' => '123456',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Shopnil Arafat',
            'email' => 'arafat@gmail.com',
            'home_district' => 'Khulna',
            'password' => '123456',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Nirob Samad',
            'email' => 'nirob@gmail.com',
            'home_district' => 'Noakhali',
            'password' => '123456',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Unkown',
            'email' => 'demo@gmail.com',
            'home_district' => 'demo',
            'password' => '123456',
        ]);
    }
}
