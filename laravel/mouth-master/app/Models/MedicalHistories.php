<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistories extends Model
{
    use HasFactory;

    public $fillable = [
        'patient_id',
        'dentist_id',
        'previous_dentist',
        'last_dental_visit',
        'physician',
        'specialty',
        'office_address',
        'office_no',
        'q1',
        'q2',
        'q2_text',
        'q3',
        'q3_text',
        'q4',
        'q4_text',
        'q5',
        'q5_text',
        'q6',
        'q7',
        'allergies',
        'bleeding_time',
        'blood_type',
        'blood_pressure',
        'women_q1',
        'women_q2',
        'women_q3',
        'illnesses'
    ];

    public $table = 'medical_histories';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }

    public function dentist() {
        return $this->belongsTo(User::class);
    }

}
