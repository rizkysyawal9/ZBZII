<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['type' => 'Daily']);
        Type::create(['type' => 'Casual']);
        Type::create(['type' => 'Party']);
    }
}
