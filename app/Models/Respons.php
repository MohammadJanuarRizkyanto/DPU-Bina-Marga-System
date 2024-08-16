<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Respons;
use App\Models\Test;

class Respons extends Model
{
    protected $fillable = [
        'test_id', 
        'rating1', 
        'rating2', 
        'rating3', 
        'rating4', 
        'rating5'
    ];
    

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
