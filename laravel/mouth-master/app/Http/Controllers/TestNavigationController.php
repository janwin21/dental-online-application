<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestNavigationController extends Controller
{
    
    // PAGES ------------------------------------------------------------------------->
    public function dashboard() { return view('pages.dashboard'); } // dashboard 
    public function logbook() { return view('pages.logbook'); } // logbook
    public function history() { return view('pages.history-storage'); } // history
    public function calendar() { return view('pages.calendar'); } // calendar
    
    // FORMS ------------------------------------------------------------------------->
    public function intraoral_examination() { return view('forms.intraoral-examination'); } // intraoral 
    public function screening() { return view('forms.screening-form'); } // screening 
    public function appointment() { return view('forms.appointment-form'); } // appointment
    public function xray() { return view('forms.xray-form'); } // xray
    public function informed_consent() { return view('forms.informed-consent'); } // informed-consent

}
