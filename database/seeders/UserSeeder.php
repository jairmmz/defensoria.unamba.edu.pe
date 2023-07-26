<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' =>  'admin',
            'email' =>  'admin@defensoria.com',
            'password' =>  bcrypt('admindefensoria2023'),
            'role' =>  'superadmin',
            'profile_photo' =>  null,
        ]);
    }
}
