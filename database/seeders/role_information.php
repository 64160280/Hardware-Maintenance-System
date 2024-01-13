<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class role_information extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([

            [
                'id' => '110',
                'name' => 'Admin',
            ],
            [
                'id' => '111',
                'name' => 'IT',
            ],
            [
                'id' => '112',
                'name' => 'User',
            ]
        ]);
    }
}
