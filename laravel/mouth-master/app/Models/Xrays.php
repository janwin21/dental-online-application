<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xrays extends Model
{
    use HasFactory;

    public $fillable = ['patient_id', 'p1', 'p2', 'p3', 'p4'];
    public $table = 'xrays';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
