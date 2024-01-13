<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class equipment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert(
            // [
            //     'id' => '885221',
            //     'name' => 'แล็ปท็อป',
            //     'detail' => 'ไม่มีอะไรเลย',
            //     'picture' => 'image.img',
            //     'equipment_status' => 'พร้อมใช้งาน',
            //     'brand_id' => '550',
            //     'device_type_id' => 7735600,
            //     'user_id' => '64160280',
            // ],
            // [
            //         'id' => '885222',
            //         'name' => 'หน้าจอ',
            //         'detail' => 'ขนาด 14 นิ้ว',
            //         'picture' => 'image.img',
            //         'equipment_status' => 'พร้อมใช้งาน',
            //         'brand_id' => '550',
            //         'device_type_id' => 7735600,
            //         'user_id' => '64160281',
            // ],
            [
                'id' => '885223',
                'name' => 'แป้นพิมพ์',
                'detail' => 'ไม่มี numpad',
                'picture' => 'image.img',
                'equipment_status' => 'พร้อมใช้งาน',
                'brand_id' => '550',
                'device_type_id' => 7735600,
                'user_id' => '64160282',
            ]
        );
    }
}
