<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformedConsent extends Model
{
    use HasFactory;

    public $fillable = ['patient_id', 'agree'];
    public $table = 'informed_consents';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
