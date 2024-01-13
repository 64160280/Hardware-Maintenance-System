<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class device_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('device_types')->insert([
            [
                'id' => '7735595',
                'device_type' => 'อัปเดตระบบปฏิบัติการ',
                'repair_id' => '1111'
            ],
            [
                'id' => '7735596',
                'device_type' => 'อัปเดตแอปพลิเคชัน',
                'repair_id' => '1111'
            ],
            [
                'id' => '7735597',
                'device_type' => 'ซอฟต์แวร์ป้องกันไวรัส',
                'repair_id' => '1111'
            ],
            [
                'id' => '7735598',
                'device_type' => 'แจ้งเตือนข้อผิดพลาดของระบบ',
                'repair_id' => '1111'
            ],
            [
                'id' => '7735599',
                'device_type' => 'อัปเดตไดร์ฟเวอร์',
                'repair_id' => '1111'
            ],
            [
                'id' => '7735600',
                'device_type' => 'คอมพิวเตอร์และอุปกรณ์ต่อพ่วง',
                'repair_id' => '1110'
            ],
            [
                'id' => '7735601',
                'device_type' => 'อุปกรณ์เครือข่าย',
                'repair_id' => '1110'
            ],
            [
                'id' => '7735602',
                'device_type' => 'เครื่องพิมพ์และสแกนเนอร์',
                'repair_id' => '1110'
            ],
            [
                'id' => '7735603',
                'device_type' => 'อุปกรณ์จัดเก็บข้อมูล',
                'repair_id' => '1110'
            ],
            [
                'id' => '7735604',
                'device_type' => 'เครื่องเสียงและวิดีโอ',
                'repair_id' => '1110'
            ],
            [
                'id' => '7735605',
                'device_type' => 'อื่น ๆ',
                'repair_id' => '1110'
            ]
        ]);
    }
}
