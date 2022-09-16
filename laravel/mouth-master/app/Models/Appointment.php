<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public $fillable = [
        'patient_id',
        'tooth_no',
        'procedure',
        'charge',
        'paid',
        'appointment',
        'start_time',
        'end_time',
        'color', 'done'
    ];

    public $table = 'appointments';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
