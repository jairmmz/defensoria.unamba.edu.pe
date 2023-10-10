<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('general_settings')->insert([
            'id' => 'a0eebc99-9c0b-4ef8-bb6d-6bb9bdsssa33',
            'title_website' => 'Año de la unidad, la paz y el desarrollo',
            'logo_website' =>  null,
            'background_website' => null,
            'banner_website' => null,
            'is_active_banner' => false,
            'number_phone' => '987654321',
            'id_user' => 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a11',
        ]);
    }
}
