<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screenings extends Model
{
    use HasFactory;

    public $fillable = [
        'patient_id','p1','p2','p3','p4','a1','a2','o1','o2','o3','o4','o5','t1','t2','t3','t4',
    ];

    public $table = 'screenings';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
