<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'id' =>  'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a11',
            'username' =>  'admin',
            'email' =>  'admin@defensoria.com',
            'password' =>  Hash::make('admind2023'),
            'role' =>  'superadmin',
            'profile_photo' =>  null,
        ]);
    }
}
