<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Zeen',
            'email' => 'zbzy@gmail.com',
            'password' => 'zeenbyzee',
            'role' => 2,
        ]);
    }
}
