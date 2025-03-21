<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin_users')->insert([
            'name' => 'Min Hein Khant',
            'email' => 'minheinkhant403@gmail.com',
            'password' => Hash::make('123456Min@'),
            'role' => 'admin',
            'created_at' => Carbon::now(), // Add created_at timestamp
            'updated_at' => Carbon::now(), // Add updated_at timestamp
        ]);
    }
}
