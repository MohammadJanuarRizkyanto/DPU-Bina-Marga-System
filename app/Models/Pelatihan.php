<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materi;
use App\Models\Test;

class Pelatihan extends Model
{
    use HasFactory;

    protected $table = 'pelatihan';
    protected $fillable = [
        'id_materi',
        'judul_training',
        'tanggal_training',
        'jenis_training', 
        'tempat_training', 
        'pelaksanaan_training'];

        // public function materi()
        // {
        //     return $this->belongsTo(Materi::class, 'id_materi');
        // }

        public function materi()
        {
            return $this->hasMany(Materi::class);
        }
    
        public function tests()
        {
            return $this->hasMany(Test::class);
        }

}

