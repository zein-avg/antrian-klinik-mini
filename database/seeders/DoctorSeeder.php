<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            [
                'name' => 'Dr. Ahmad Wijaya, Sp.U',
                'poli_id' => 1, // Poli Umum
                'schedule_day' => 'Monday',
                'start_time' => '08:00',
                'end_time' => '12:00',
            ],
            [
                'name' => 'Dr. Siti Rahmawati, Sp.U',
                'poli_id' => 1, // Poli Umum
                'schedule_day' => 'Wednesday',
                'start_time' => '13:00',
                'end_time' => '17:00',
            ],
            [
                'name' => 'Dr. Budi Santoso, Sp.U',
                'poli_id' => 1, // Poli Umum
                'schedule_day' => 'Friday',
                'start_time' => '08:00',
                'end_time' => '14:00',
            ],
            [
                'name' => 'drg. Rina Permata',
                'poli_id' => 2, // Poli Gigi
                'schedule_day' => 'Tuesday',
                'start_time' => '09:00',
                'end_time' => '13:00',
            ],
            [
                'name' => 'drg. Hendra Gunawan',
                'poli_id' => 2, // Poli Gigi
                'schedule_day' => 'Thursday',
                'start_time' => '14:00',
                'end_time' => '18:00',
            ],
            [
                'name' => 'Dr. Maria Ulfa, Sp.A',
                'poli_id' => 3, // Poli Anak
                'schedule_day' => 'Monday',
                'start_time' => '10:00',
                'end_time' => '15:00',
            ],
            [
                'name' => 'Dr. Putri Handayani, Sp.A',
                'poli_id' => 3, // Poli Anak
                'schedule_day' => 'Saturday',
                'start_time' => '08:00',
                'end_time' => '12:00',
            ],
            [
                'name' => 'Dr. Dewi Lestari, Sp.OG',
                'poli_id' => 4, // Poli Kandungan
                'schedule_day' => 'Wednesday',
                'start_time' => '08:00',
                'end_time' => '12:00',
            ],
            [
                'name' => 'Dr. Rudi Hartono, Sp.M',
                'poli_id' => 5, // Poli Mata
                'schedule_day' => 'Tuesday',
                'start_time' => '13:00',
                'end_time' => '17:00',
            ],
            [
                'name' => 'Dr. Andi Wijaya, Sp.THT',
                'poli_id' => 6, // Poli THT
                'schedule_day' => 'Thursday',
                'start_time' => '09:00',
                'end_time' => '13:00',
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}