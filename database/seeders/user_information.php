<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class user_information extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'id' => '64160280',
                'username' => 'Phachara',
                'fname' => 'Phachara',
                'lname' => 'Aunkitti',
                'role_id' => '110', // Admin
                'password' => Hash::make('12345678'),
                'picture_path' => 'image.img',
                'tel' => '0828187389',
            ],
            [
                // 'id' => '64160280',
                // 'username' => 'Phachara',
                // 'fname' => 'Phachara',
                // 'lname' => 'Aunkitti',
                // 'role_id' => '110', // Admin
                // 'password' => Hash::make('12345678'),
                // 'picture_path' => 'image.img',
                // 'tel' => '0828187389',


                'id' => '64160281',
                'username' => 'teerajuk',
                'fname' => 'Teerajuk',
                'lname' => 'Sakunchaisitthichok',
                'role_id' => '111', // Admin
                'password' => Hash::make('12345678'),
                'tel' => '0988514784',
                'picture_path' => 'img.img',
                // ],
                // [
                //     'id' => '64160282',
                //     'username' => 'nareson',
                //     'role_id' => '112', // Admin
                //     'password' => Hash::make('12345678'),
            ],
            [
                'id' => '64160282',
                'username' => 'Nareson',
                'fname' => 'Narason',
                'lname' => 'Jiwbang',
                'role_id' => '112', // Admin
                'password' => Hash::make('12345678'),
                'tel' => '0656089021',
                'picture_path' => 'images.img',
            ]

        ]);
    }
}
