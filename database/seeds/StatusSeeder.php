<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'sname' => 'รอดำเนินการ' 
        ]);

        DB::table('statuses')->insert([
            'sname' => 'ดำเนินการสำเร็จ' 
        ]);

        DB::table('statuses')->insert([
            'sname' => 'ยังไม่ชำระ' 
        ]);

    }
}
