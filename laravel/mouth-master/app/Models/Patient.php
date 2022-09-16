<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public $fillable = [
        'dentist_id',
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

    // get the latest data
    public function medical_history() {
        return $this->getFirstOrderedData(MedicalHistories::class);
    }

    public function intraoral() {
        return $this->getFirstOrderedData(Intraorals::class);
    }

    public function xray() {
        return $this->getFirstOrderedData(Xrays::class);
    }

    public function screening() {
        return $this->getFirstOrderedData(Screenings::class);
    }

    public function informed_consent() {
        return $this->hasOne(InformedConsent::class)->first();
    }

    public function getFirstOrderedData($class) {
        return $this->hasMany($class)
                    ->orderBy('updated_at', 'desc')
                    ->limit(1)->first();
    }

    public function dentist() {
        return $this->belongsTo(User::class);
    }

    // get all data
    public function medical_histories() {
        return $this->getAllDataByOrder(MedicalHistories::class);
    }

    public function intraorals() {
        return $this->getAllDataByOrder(Intraorals::class);
    }

    public function xrays() {
        return $this->getAllDataByOrder(Xrays::class);
    }

    public function screenings() {
        return $this->getAllDataByOrder(Screenings::class);
    }

    public function appointments() {
        return $this->getAllDataByOrder(Appointment::class);
    }

    public function getAllDataByOrder($class) {
        return $this->hasMany($class)
                    ->orderBy('created_at', 'desc');
    }

}
