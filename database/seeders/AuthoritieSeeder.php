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
            'id' => 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a32',
            'charge_authority' => 'Defensor(a) Universitario',
            'name' => 'Nombre del Defensor(a) Universitario',
            'image_authority' => null,
            'id_user' => 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a11',
        ]);
    }
}
