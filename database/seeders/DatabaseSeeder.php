<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Wipe the table clean before seeding
        DB::table('users')->delete();

        // Seed the admin user
        DB::table('users')->insert([
            'name' => 'Zafarullah Naushad',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);

        // Seed the patient user
        DB::table('users')->insert([
            'name' => 'Bruce Wayne',
            'email' => 'batman@ezpharma.com',
            'password' => Hash::make('password'),
            'role' => 'Patient',
        ]);

        // Seed additional 98 dummy patient records
        \App\Models\User::factory(98)->create();
        \App\Models\Medication::factory(30)->create();
    }
}
