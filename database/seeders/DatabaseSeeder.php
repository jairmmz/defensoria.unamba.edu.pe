<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1)->create();

        $this->call(UserSeeder::class);
        $this->call(GeneralSettingSeeder::class);
        $this->call(AuthoritieSeeder::class);


        // \App\Models\User::factory()->create([
        //     'username' => 'admin',
        //     'email' => 'admin@defensoria.com',
        //     'password' => Hash::make('123456789'),
        //     'role' => 'superadmin',
        //     'profile_photo' => null,
        // ]);


    }
}
