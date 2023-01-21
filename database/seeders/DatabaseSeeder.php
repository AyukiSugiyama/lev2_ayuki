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
        $this->call(targetsSeeder::class);
        $this->call(sexesSeeder::class);
        $this->call(relationsSeeder::class);
        $this->call(colorsSeeder::class);
    }
}
