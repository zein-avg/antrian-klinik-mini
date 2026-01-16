<?php

namespace Database\Seeders;

use App\Models\Poli;
use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $polis = [
            'Poli Umum',
            'Poli Gigi',
            'Poli Anak',
            'Poli Kandungan',
            'Poli Mata',
            'Poli THT',
        ];

        foreach ($polis as $poli) {
            Poli::create(['name' => $poli]);
        }
    }
}