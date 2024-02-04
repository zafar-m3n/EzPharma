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
            'name' => 'Amna Rasheed',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);

        // Seed the patient user
        DB::table('users')->insert([
            'name' => 'Zafarullah Naushad',
            'email' => 'thezafar.m3n@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Patient',
        ]);

        // Seed the pharmacist user
        DB::table('users')->insert([
            'name' => 'Chanka Herath',
            'email' => 'chankaherath2001@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Pharmacist',
        ]);

        // Seed the pharmacy assistant user
        DB::table('users')->insert([
            'name' => 'Bruce Wayne',
            'email' => 'batman@ezpharma.com',
            'password' => Hash::make('password'),
            'role' => 'Pharmacy Assistant',
        ]);


        // Seed additional 98 dummy patient records
        \App\Models\User::factory(30)->create();
        \App\Models\Medication::factory(15)->create();

        // Seed 5 appointments
        \App\Models\Appointment::create([
            'patient_id' => 2,
            'appointment_date' => '2024-02-04 11:00:00',
            'status' => 'pending',
            'notes' => 'Please be on time!',
        ]);
        \App\Models\Appointment::create([
            'patient_id' => 2,
            'appointment_date' => '2024-02-04 11:00:00',
            'status' => 'pending',
            'notes' => 'Please be on time!',
        ]);
        \App\Models\Appointment::create([
            'patient_id' => 2,
            'appointment_date' => '2024-02-04 11:00:00',
            'status' => 'pending',
            'notes' => 'Please be on time!',
        ]);
        \App\Models\Appointment::create([
            'patient_id' => 2,
            'appointment_date' => '2024-02-04 11:00:00',
            'status' => 'pending',
            'notes' => 'Please be on time!',
        ]);
        \App\Models\Appointment::create([
            'patient_id' => 2,
            'appointment_date' => '2024-02-04 11:00:00',
            'status' => 'pending',
            'notes' => 'Please be on time!',
        ]);


        // Seed 5 payments
        DB::table('payments')->insert([
            'patient_id' => 2,
            'amount' => 100,
            'status' => 'pending',
            'payment_date' => '2024-02-04 11:00:00',
            'method' => 'cash',
            'details' => 'Paid for medication',
        ]);
        DB::table('payments')->insert([
            'patient_id' => 2,
            'amount' => 100,
            'status' => 'pending',
            'payment_date' => '2024-02-04 11:00:00',
            'method' => 'cash',
            'details' => 'Paid for medication',
        ]);
        DB::table('payments')->insert([
            'patient_id' => 2,
            'amount' => 100,
            'status' => 'pending',
            'payment_date' => '2024-02-04 11:00:00',
            'method' => 'cash',
            'details' => 'Paid for medication',
        ]);
        DB::table('payments')->insert([
            'patient_id' => 2,
            'amount' => 100,
            'status' => 'pending',
            'payment_date' => '2024-02-04 11:00:00',
            'method' => 'cash',
            'details' => 'Paid for medication',
        ]);
        DB::table('payments')->insert([
            'patient_id' => 2,
            'amount' => 100,
            'status' => 'pending',
            'payment_date' => '2024-02-04 11:00:00',
            'method' => 'cash',
            'details' => 'Paid for medication',
        ]);

        // Seed 5 articles
        DB::table('articles')->insert([
            'title' => 'The Importance of Medication Adherence',
            'summary' => 'Medication adherence is important for your health.',
            'content' => 'Medication adherence is important for your health. It is important to take your medication as prescribed by your doctor. If you have any questions about your medication, ask your doctor or pharmacist.',
            'image' => 'medication-adherence.jpg',
            'category' => 'Health',
        ]);
        DB::table('articles')->insert([
            'title' => 'The Importance of Medication Adherence',
            'summary' => 'Medication adherence is important for your health.',
            'content' => 'Medication adherence is important for your health. It is important to take your medication as prescribed by your doctor. If you have any questions about your medication, ask your doctor or pharmacist.',
            'image' => 'medication-adherence.jpg',
            'category' => 'Health',
        ]);
        DB::table('articles')->insert([
            'title' => 'The Importance of Medication Adherence',
            'summary' => 'Medication adherence is important for your health.',
            'content' => 'Medication adherence is important for your health. It is important to take your medication as prescribed by your doctor. If you have any questions about your medication, ask your doctor or pharmacist.',
            'image' => 'medication-adherence.jpg',
            'category' => 'Health',
        ]);
        DB::table('articles')->insert([
            'title' => 'The Importance of Medication Adherence',
            'summary' => 'Medication adherence is important for your health.',
            'content' => 'Medication adherence is important for your health. It is important to take your medication as prescribed by your doctor. If you have any questions about your medication, ask your doctor or pharmacist.',
            'image' => 'medication-adherence.jpg',
            'category' => 'Health',
        ]);
        DB::table('articles')->insert([
            'title' => 'The Importance of Medication Adherence',
            'summary' => 'Medication adherence is important for your health.',
            'content' => 'Medication adherence is important for your health. It is important to take your medication as prescribed by your doctor. If you have any questions about your medication, ask your doctor or pharmacist.',
            'image' => 'medication-adherence.jpg',
            'category' => 'Health',
        ]);

        // Seed 5 notifications
        DB::table('notifications')->insert([
            'user_id' => 2,
            'title' => 'Appointment Reminder',
            'message' => 'You have an appointment on 2024-02-04 11:00:00',
            'is_read' => false,
        ]);
        DB::table('notifications')->insert([
            'user_id' => 2,
            'title' => 'Appointment Reminder',
            'message' => 'You have an appointment on 2024-02-04 11:00:00',
            'is_read' => false,
        ]);
        DB::table('notifications')->insert([
            'user_id' => 2,
            'title' => 'Appointment Reminder',
            'message' => 'You have an appointment on 2024-02-04 11:00:00',
            'is_read' => false,
        ]);
        DB::table('notifications')->insert([
            'user_id' => 2,
            'title' => 'Appointment Reminder',
            'message' => 'You have an appointment on 2024-02-04 11:00:00',
            'is_read' => false,
        ]);
        DB::table('notifications')->insert([
            'user_id' => 2,
            'title' => 'Appointment Reminder',
            'message' => 'You have an appointment on 2024-02-04 11:00:00',
            'is_read' => false,
        ]);
    }
}
