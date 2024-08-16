<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelatihan')->insert([
            [
                'id_materi' => '01',
                'judul_training' => 'puput',
                'tanggal_training' => '2024-08-31', // Pastikan format tanggal benar
                'jenis_training' => 'web development',
                'tempat_training' => 'Online',
                'pelaksanaan_training' => 'Zoom'
            ],
            [
                'id_materi' => '02',
                'judul_training' => 'bagas',
                'tanggal_training' => '2024-09-01', // Pastikan format tanggal benar
                'jenis_training' => 'UI/UX',
                'tempat_training' => 'Offline',
                'pelaksanaan_training' => 'Classroom'
            ],
        ]);
    }
}
