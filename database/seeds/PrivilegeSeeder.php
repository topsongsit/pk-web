<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privileges')->insert([
            'pname' => 'ดูได้' 
        ]);

        DB::table('privileges')->insert([
            'pname' => 'แก้ไขได้' 
        ]);
    }
}
