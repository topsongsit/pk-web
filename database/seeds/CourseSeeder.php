<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'cname' => 'Basic Course',
            'cdetail' => 'เหมาะกับ
            - ผู้ที่เพิ่งเริ่มออกกำล้งกาย
            - เน้นมวยไทยพื้นฐาน
            - เพิ่มความฟิตและกระชับกล้ามเนื้อหลัก 
            อธิบาย 
            - วอร์มและเรียนมวยไทยพื้นฐาน 30 นาที
            - ล่อเป้า 4-5 ยก 30 นาที  
            - คูลดาวน์ 15 นาท' ,
            'cimg' => 'pic' ,
            'cprice' => 2100
        ]);

        DB::table('courses')->insert([
            'cname' => 'Intermediate Course',
            'cdetail' => 'เหมาะกับ
            - ผู้ที่ออกกำลังบ้างเป็นบางครั้ง
            - เน้นมวยไทยพื้นฐาน
            - ต้องการเพิ่มทักษะมวยไทย
            อธิบาย 
            - วอร์มและเรียนมวยไทยพื้นฐาน 30 นาที
            - ล่อเป้า 5-6 ยก 30 นาที  
            - คูลดาวน์ 15 นาที' ,
            'cimg' => 'pic' ,
            'cprice' => 4500
        ]);

        DB::table('courses')->insert([
            'cname' => 'Intensive Course',
            'cdetail' => 'เหมาะกับ
            - ผู้ที่ออกกำลังกายเป็๋นประจำ
            - เน้นมวยไทยพื้นฐาน และต้องการเพิ่มทักษะมวยไทย
            - เพิ่มความฟิตและกระชับกล้ามเนื้อหลัก 
            อธิบาย 
            - วอร์มและเรียนมวยไทยพื้นฐาน 30 นาที
            - ล่อเป้า 7-8 ยก 30 นาที  
            - คูลดาวน์ 15 นาที' ,
            'cimg' => 'pic' ,
            'cprice' => 9000
        ]);
    }
}
