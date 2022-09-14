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
}
