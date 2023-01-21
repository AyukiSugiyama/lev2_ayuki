<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class relationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relations')->insert([
            'title' => '恋人'
        ]);
        
        DB::table('relations')->insert([
            'title' => '兄弟'
        ]);
        
        DB::table('relations')->insert([
            'title' => '友人'
        ]);
        
        DB::table('relations')->insert([
            'title' => '子供'
        ]);
        
        DB::table('relations')->insert([
            'title' => '孫'
        ]);
    }
}
