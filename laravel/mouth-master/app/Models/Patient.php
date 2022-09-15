<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public $fillable = [
        'first_name',
        'last_name',
        'middle_initial',
        'birth_date',
        'sex',
        'age',
        'religion',
        'nationality',
        'nickname',
        'home_no',
        'home_address',
        'occupation',
        'office_no',
        'dental_insurance',
        'effective_date',
        'phone_no',
        'email',
        'refferer',
        'reason',
        'guardian_name',
        'guardian_occupation'
    ];

    public $table = 'patients';
    public $dates = ['birth_date'];

    public function medical_histories() {
        return $this->hasMany(MedicalHistories::class);
    }

    public function intraorals() {
        return $this->hasMany(Intraorals::class);
    }

    public function xrays() {
        return $this->hasMany(Xrays::class);
    }

    public function screenings() {
        return $this->hasMany(Screenings::class);
    }

    public function informed_consents() {
        return $this->hasMany(InformedConsent::class);
    }

}
