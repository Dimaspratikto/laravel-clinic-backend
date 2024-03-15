<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DoctorSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'dimas@fic15.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '1234567890',
        ]);

        //seeder profile_clinic manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Dimasp',
            'address' => 'Jl. Bulak Setro 2A',
            'phone' => '1234567890',
            'email' => 'dimastikto@clinic.com',
            'doctor_name' => 'Dr. dimastikto',
            'unique_code' => '12345',
        ]);

        //panggil class doctor
        $this->call(DoctorSeeder::class);
    }
}
