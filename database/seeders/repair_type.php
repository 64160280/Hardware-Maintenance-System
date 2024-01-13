<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class repair_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repair_types')->insert([
            [
                'id' => '1110',
                'repair_type' => 'แจ้งซ่อมฮาร์ดแวร์'
            ],
            [
                'id' => '1111',
                'repair_type' => 'แจ้งซ่อมซอฟต์แวร์'
            ]
        ]);
    }
}
