<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            [
                'nip_pegawai' => '12345678',
                'nama_pegawai' => 'puput',
                'jabatan_pegawai'=> 'web developer',
                'unit_kerja' => 'SUB A'
            ],
            [
                'nip_pegawai' => '987654321',
                'nama_pegawai' => 'dita',
                'jabatan_pegawai'=> 'UI/UX',
                'unit_kerja' => 'SUB B'
            ],
        ]);
    }
}
