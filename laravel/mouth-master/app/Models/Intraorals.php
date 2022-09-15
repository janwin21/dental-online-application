<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intraorals extends Model
{
    use HasFactory;

    public $fillable = ['patient_id', 'data'];
    public $table = 'intraorals';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
