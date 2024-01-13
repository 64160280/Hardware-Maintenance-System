<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

            $this->call(brand::class);
            $this->call(repair_type::class);
            $this->call(device_type::class);
            $this->call(role_information::class);
            $this->call(user_information::class);


    }
}
