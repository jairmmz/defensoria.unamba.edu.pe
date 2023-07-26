<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthoritieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authorities')->insert([
            'charge_authority' => 'Defensor Universitario',
            'name' => 'MVZ. Víctor Raúl Cano Fuentes',
            'image_authority' => 'users/user-default.png',
            'id_user' => '1'
        ]);
    }
}
