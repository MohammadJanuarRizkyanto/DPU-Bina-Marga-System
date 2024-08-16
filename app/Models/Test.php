<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = 'test'; // Specify the table name
    protected $fillable = ['pelatihan_id','Jenis', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'status'];
    use HasFactory;

    public function pelatihan()
    {
        return $this->belongsTo(Pelatihan::class);
    }

    public function respons()
    {
        return $this->hasMany(Respon::class);
    }
}


