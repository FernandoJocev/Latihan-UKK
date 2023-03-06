<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::insert([
            'name' => 'dummy',
            'username' => 'data',
            'email' => 'dummy@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'testing',
            'website' => 'website.com',
            'phone_number' => '12345678',
            'gender' => 'Male',
        ]);
    }
}
