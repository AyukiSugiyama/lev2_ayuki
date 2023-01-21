<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class colorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'title' => '赤'
        ]);
        
        DB::table('colors')->insert([
            'title' => '青'
        ]);
        
        DB::table('colors')->insert([
            'title' => '黄'
        ]);
        
        DB::table('colors')->insert([
            'title' => '緑'
        ]);
        
        DB::table('colors')->insert([
            'title' => '白'
        ]);
        
        DB::table('colors')->insert([
            'title' => '黒'
        ]);
    }
}
