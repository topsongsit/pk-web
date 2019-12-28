<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'dname' => 'ช่วงเช้า',
            'ddate' => '9.00-12.00' 
        ]);
        
        DB::table('days')->insert([
            'dname' => 'ช่วงบ่าย',
            'ddate' => '13.00-16.00' 
        ]);

        DB::table('days')->insert([
            'dname' => 'ช่วงเย็น',
            'ddate' => '16.00-19.00' 
        ]);
    }
}
