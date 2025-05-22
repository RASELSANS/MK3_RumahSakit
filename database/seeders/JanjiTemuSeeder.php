<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JanjiTemuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $janjitemu = [
            [
                'id_pasien' => 1,
                'id_dokter' => 1,
                'tanggal_janji' => "2025-06-01",
                'status' => 'Flu'

            ]
            ];

        DB::table('janji_temus')->insert($janjitemu);
    }
}
