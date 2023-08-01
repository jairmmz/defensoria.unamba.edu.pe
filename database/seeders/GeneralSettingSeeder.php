<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('general_settings')->insert([
            'title_website' => 'Año de la unidad, la paz y el desarrollo',
            'logo_website' =>  'logo-du-unamba.png',
            'background_website' => null,
            'banner_website' => null,
            'is_active_banner' => true,
            'number_phone' => '987654321',
            'link_facebook' =>  'www.facebook.com',
            'id_user' => '1'
        ]);
    }
}
