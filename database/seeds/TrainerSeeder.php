<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            'tname' => 'นายแดง',
            'tdetail' => 'อายุ 43 ปี 
            ประวัติ 
            ประสบการณ์สอนมวยมากกว่า 20 ปี
            ผู้เชียวชาญมวยไทยโบราณ
            ผู้สอนมวยไทยเพื่อป้องกันตัว',
            'timg' => 'pic',
            'tcategory' => 'เทรนเนอร์',
            'tprice' => 0
        ]);

        DB::table('trainers')->insert([
            'tname' => 'แสนชัย',
            'tdetail' => 'อายุ 39 ปี 
            ประวัติ 
            - ยอดมวยประจำปี 2542 (สมาคมผู้สื่อข่าวกีฬาแห่งประเทศไทย)
            - แชมป์รุ่นเฟเธอร์เวทเวทีมวยลุมพินี (130 ปอนด์) เมื่อวันที่ 2 พฤษภาคม 2551 ทวงคืนหลังจากเสียเข็มขัดให้ โอโรโน่ ว.เพชรพูล เมื่อ 7 ธันวาคม 2550
            - 27 มกราคม พ.ศ. 2561
            ชนะ เอนริเก มูลเลอร',
            'timg' => 'pic',
            'tcategory' => 'นักมวย',
            'tprice' => 1500
        ]);
    }
}
