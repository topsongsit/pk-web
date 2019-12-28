<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            'gname' => 'ผู้ชาย' 
        ]);

        DB::table('genders')->insert([
            'gname' => 'ผู้หญิง'
        ]);
    }
}
