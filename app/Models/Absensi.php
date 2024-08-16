<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    public $timestamps = true;

    protected $fillable = [
        'id_absensi',   
        'id_training',
        'id_test',
        'nip_pegawai',
        'tanggal',
        'StatusTest_Done',
        'jumlah_test',
    ];

    // Relationship to Training
    public function training()
    {
        return $this->belongsTo(Pelatihan::class, 'id_training', 'id');
    }

    // Relationship to Test
    public function test()
    {
        return $this->belongsTo(Test::class, 'id_test', 'id_test');
    }

    // Relationship to Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip_pegawai', 'nip_pegawai');
    }
}