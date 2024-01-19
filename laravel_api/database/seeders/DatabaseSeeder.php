<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       \App\Models\People::factory(200)->create();
    }
}