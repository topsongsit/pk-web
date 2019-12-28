<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert([
            'stname' => 'สนามมวย 01' ,
            'stdetail' => 'สนามสีน้ำ เส้นขอบสีแดง' ,
            'stimg' => 'pic' 
        ]);
    }
}
