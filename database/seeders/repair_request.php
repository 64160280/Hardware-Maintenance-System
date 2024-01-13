<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class repair_request extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repair_request_equipments')->insert([
            //แจ้งซ่อม
            [
                'id' => '384046',
                'level_issue' => '3',
                'admin_id' => '64160280',
                'date_announce' =>  Carbon::now(),
                'status' => 'เสร็จสิ้น',
                'it_id' => '64160281',
                'picture_path' => 'public/images/image.jpg',
                'issue' => 'จอเสีย',
                'details' => 'ขอรับภายในวันพรุ่งนี้',
                'cause_issue' => 'หน้าจอจ่ายไฟไม่พอ',
                'reason_not_approve' => '-',
                'it_point' => '5',
                'equipment_id' => '885221',
                'user_id' => '64160282'
            ],
            //แจ้งซ่อม
            [
                'id' => '384047',
                'admin_id' => '64160280',
                'date_announce' =>  Carbon::now(),
                'status' => 'กำลังดำเนินการ',
                'it_id' => '64160281',
                'picture_path' => 'public/images/imag.jpg',
                'details' => 'ขอรับภายในวันพรุ่งนี้',
                'amount_request' => '2',
                'reason_not_approve' => '-',
                'it_point' => '5',
                'equipment_id' => '885222',
                'user_id' => '64160282'
            ],
        ]);
    }
}
