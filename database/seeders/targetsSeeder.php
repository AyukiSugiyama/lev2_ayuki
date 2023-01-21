<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class targetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('targets')->insert([
            'title' => '小学生'
        ]);
        
        DB::table('targets')->insert([
            'title' => '中学生'
        ]);
        
        DB::table('targets')->insert([
            'title' => '高校生'
        ]);
        
        DB::table('targets')->insert([
            'title' => '大学生'
        ]);
        
    }
}
