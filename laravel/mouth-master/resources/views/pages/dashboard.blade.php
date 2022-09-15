@extends('layouts.master')

<!-- DASHBOARD WITH DATA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouth Masters</title>
    
    <!-- Google Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- FONTS -->
    <!-- 'Roboto', sans-serif -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,900;1,100;1,300;1,700;1,900&display=swap" rel="stylesheet">

    <!-- 'Open Sans', sans-serif -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- 'Pacifico', cursive -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- 'Anton', sans-serif -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Resources Bundling -->
    @vite([
        'resources/scss/style.scss', 'resources/scss/fontawesome.scss',
        'resources/js/components/transformation.js', 'resources/js/components/modal.js',
        'resources/js/pages/dashboard.js'
    ])
    
</head>
<body>

    @section('page-content')
    
        <!-- Main Content -->
        <div class="col-7 p-4">

            <!-- Content Header -->
            <div class="content-header rounded px-4">
                
                <div class="row">

                    <!-- Left SVG Image -->
                    <div class="col-2 py-4"><object data="{{ asset('svg/male.svg') }}"></object></div>

                    @include('layouts.dashboard-header')

                </div>

            </div>

            <!-- Content Information -->
            <div class="content-information mt-4">

                <div class="section-title bg-{{ (isset($patient)) ? 'success' : 'dark' }} rounded-top px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-circle-info me-2"></i>{{ (isset($patient)) ? '' : 'No Patient ' }}Information</h6>
                </div>

                @if (isset($patient))

                <!-- Main Information Section -->
                <div class="section-body bg-light p-5">
                    <div class="row">

                        <!-- First Row -->
                        <div class="col-6">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $patient->sex }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-venus-mars me-2 text-success"></i>Sex</p>
                        </div>

                        <div class="col-6">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $patient->religion }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-cross me-2 text-success"></i>Religion</p>
                        </div>

                        <!-- Second Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ date('F d, Y', strtotime($patient->birth_date)) }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-cake-candles me-2 text-success"></i>Birth Date</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $patient->email }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-envelope me-2 text-success"></i>Email Address</p>
                        </div>

                        <!-- Third Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $patient->home_address }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-house me-2 text-success"></i>Home Address</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $patient->nationality }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-flag me-2 text-success"></i>Nationality</p>
                        </div>

                        <!-- Fourth Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $patient->home_no }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Home#</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $patient->phone_no }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Cellphone#</p>
                        </div>

                        <!-- Fifth Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $patient->occupation }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-briefcase me-2 text-success"></i>Occupation</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $check->empty($patient->office_no) }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Office#</p>
                        </div>

                        <!-- Sixth Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $check->radio($patient->dental_insurance) }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Have dental insurance?</p>
                        </div>

                        @php
                            $value = $check->empty($patient->effective_date);
                            $empty = $value != 'None';
                            $effective_date = 
                                !$empty ? date('F d, Y', strtotime($patient->effective_date)) : $value ;
                        @endphp

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $effective_date }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Effective Date</p>
                        </div>

                    </div>
                </div>

                @if (isset($medical_history))

                <div class="section-title bg-dark px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-clock-rotate-left me-2 text-success"></i>Medical History</h6>
                </div>

                <div class="section-body bg-light p-5">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-user-nurse me-2 text-success"></i>Dental History</p>
                        </div>

                        <!-- First Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $medical_history->previous_dentist }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Previous Doctor</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $medical_history->last_dental_visit }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Last Dental Visit</p>
                        </div>
                        
                        <div class="col-12 pt-5">
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-user-nurse me-2 text-success"></i>Medical History</p>
                        </div>

                        <!-- Second Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $medical_history->physician }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-star me-2 text-gold"></i>Physician</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $medical_history->specialty }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Specialty</p>
                        </div>

                        <!-- Third Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $medical_history->office_address }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Office Address</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">{{ $medical_history->office_no }}</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Office#</p>
                        </div>

                    </div>
                </div>

                <!-- Medical History Section -->
                <div class="medical-form section-body border-top border-success bg-light p-5">
                    <div class="row">

                        <!-- First Row -->
                        <div class="col-6">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Are you in good health?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->radio_color($medical_history->q1) }}">{{ $check->radio($medical_history->q1) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Are you under medical treatment right now?</p>

                                    <!-- Add Information -->
                                    <p class="roboto weight-600 mb-0 pb-0 fs-sm">Information blah blah blah...</p>
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">If so, what is the condition being treated?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->radio_color($medical_history->q2) }}">{{ $check->radio($medical_history->q2) }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Second Row -->
                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Have you ever had serious illness or surgical operation?</p>

                                    <!-- Add Information -->
                                    <p class="roboto weight-600 mb-0 pb-0 fs-sm">Information blah blah blah...</p>
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">If so, what illness or operation?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->radio_color($medical_history->q3) }}">{{ $check->radio($medical_history->q3) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Have you ever been hospitalized?</p>

                                    <!-- Add Information -->
                                    <p class="roboto weight-600 mb-0 pb-0 fs-sm">Information blah blah blah...</p>
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">If so, when and why?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->radio_color($medical_history->q4) }}">{{ $check->radio($medical_history->q4) }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Third Row -->
                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Are taking any prescription/non-prescription medication?</p>

                                    <!-- Add Information -->
                                    <p class="roboto weight-600 mb-0 pb-0 fs-sm">Information blah blah blah...</p>
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">If so, please specify:</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->radio_color($medical_history->q5) }}">{{ $check->radio($medical_history->q5) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Do you use tobacco products?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->radio_color($medical_history->q6) }}">{{ $check->radio($medical_history->q6) }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Fourth Row -->
                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Do you use alcohol, cocaine or other dangerous drugs?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->radio_color($medical_history->q7) }}">{{ $check->radio($medical_history->q7) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="section-green col-6 pt-5">
                            <div class="row">
                                <div class="col-12">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>Are you allergic to any of the following:</p>

                                    <div class="d-flex flex-row flex-wrap">

                                    <!-- Add Information -->
                                    @foreach ($check->arr($medical_history->allergies) as $allergy)

                                        @if ($allergy == 'null')
                                            @continue
                                        @endif

                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">{{ $allergy }}</p>
                                        </div>
                                        
                                    @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Fifth Row -->
                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-7">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Bleeding time:</p>
                                </div>
                                <div class="col-5 text-end">
                                    <p class="roboto weight-600 mb-0 pb-0 text-dark">{{ $check->time($medical_history->bleeding_time) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Are you pregnant?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->empty_radio_color($medical_history->women_q1) }}">{{ $check->empty_radio($medical_history->women_q1) }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sixth Row -->
                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Are you nursing?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->empty_radio_color($medical_history->women_q2) }}">{{ $check->empty_radio($medical_history->women_q2) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Are you taking birth pills?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-{{ $check->empty_radio_color($medical_history->women_q3) }}">{{ $check->empty_radio($medical_history->women_q3) }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Seventh Row -->
                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-7">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Blood type:</p>
                                </div>
                                <div class="col-5 text-end">
                                    <p class="roboto weight-600 mb-0 pb-0 text-dark">{{ $medical_history->blood_type }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-5">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Blood pressure:</p>
                                </div>
                                <div class="col-7 text-end">
                                    <p class="roboto weight-600 mb-0 pb-0 text-dark">{{ $medical_history->blood_pressure }} mmHg</p>
                                </div>
                            </div>
                        </div>

                        <!-- Eight Row -->
                        <div class="section-green col-12 pt-5">
                            <div class="row">
                                <div class="col-12">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>Do you have or have you had any of the following?</p>

                                    <div class="d-flex flex-row flex-wrap">

                                        <!-- Add Information -->
                                        @foreach ($check->arr($medical_history->illnesses) as $illness)

                                            @if ($illness == 'null')
                                                @continue
                                            @endif

                                            <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                                <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">{{ $illness }}</p>
                                            </div>   

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @endif

                @if (isset($intraoral))

                <div class="section-title bg-dark px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-teeth text-success me-2"></i>Intraoral Examination Result</h6>
                </div>
                
                <!-- Intraoral Section -->
                <div class="section-body border-top border-success bg-light p-5">
                    <div class="row">

                        <div class="intraoral col-12">
                            <table class="w-100"></table>
                        </div>

                    </div>
                </div>
                    
                @endif

                @if ($xray)

                <div class="section-title bg-dark px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-x-ray text-success me-2"></i></i>X-ray Information</h6>
                </div>
                
                <!-- X-ray Section -->
                <div class="section-body border-top border-success bg-light p-5">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>X-ray List</p>
                        </div>
                        
                        <div class="col-12">

                            <!-- Add Information -->
                            <div class="d-flex flex-row flex-wrap">
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($xray->p1) }} me-2"></i>Periapical</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($xray->p2) }} me-2"></i>Panoramic</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($xray->p3) }} me-2"></i>Cephalometric</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($xray->p4) }} me-2"></i>Occlusal (Upper/Lower)</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    
                @endif

                @if ($screening)

                <div class="section-title bg-dark px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-display text-success me-2"></i>Screening Information</h6>
                </div>
                
                <!-- Screening Section -->
                <div class="section-body border-top border-success bg-light p-5">
                    <div class="row">
                        
                        <!-- First Row -->
                        <div class="col-12">
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>Periodental List</p>
                        </div>
                        
                        <div class="col-12">

                            <!-- Add Information -->
                            <div class="d-flex flex-row flex-wrap">
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->p1) }} me-2"></i>Occlusal</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->p2) }} me-2"></i>Early Periodontitis</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->p3) }} me-2"></i>Moderate Periodontitis</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->p4) }} me-2"></i>Advanced Periodontitis</p>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Second Row -->
                        <div class="col-12 mt-4">
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>Appliances List</p>
                        </div>
                        
                        <div class="col-12">

                            <!-- Add Information -->
                            <div class="d-flex flex-row flex-wrap">
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->a1) }} me-2"></i>Orthodontics</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->a2) }} me-2"></i>Stayplate</p>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Third Row -->
                        <div class="col-12 mt-4">
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>Occlusion List</p>
                        </div>
                        
                        <div class="col-12">

                            <!-- Add Information -->
                            <div class="d-flex flex-row flex-wrap">
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><span class="text-success me-2">{{ $screening->o1 }}</span>Class (Molor)</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><span class="text-success me-2">{{ $screening->o2 }}</span>Overjet</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><span class="text-success me-2">{{ $screening->o3 }}</span>Overbite</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><span class="text-success me-2">{{ $screening->o4 }}</span>Midline Deviation</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><span class="text-success me-2">{{ $screening->o5 }}</span>Crossbite</p>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Fourth Row -->
                        <div class="col-12 mt-4">
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>TMD List</p>
                        </div>
                        
                        <div class="col-12">

                            <!-- Add Information -->
                            <div class="d-flex flex-row flex-wrap">
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->t1) }} me-2"></i>Clenching</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->t2) }} me-2"></i>Clicking</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->t3) }} me-2"></i>Trismus</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid {{ $check->radio_check($screening->t4) }} me-2"></i>Muscle Spasm</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                    
                @endif
                
                @endif

            </div>

            <footer class="footer bg-success rounded-bottom px-4 pt-4 pb-2">
                <div class="row">

                    <div class="col-6">
                        <h6 class="text-light roboto weight-600 mb-4">Mouth Masters - Dental Clinic</h6>
                        <p class="text-light roboto fs-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>

                    <div class="col-3 text-end">
                        <p class="text-light roboto fs-sm weight-600 mb-2">Services</p>
                        <ul class="list-group">
                            <li class="list-group-item bg-success border-0 m-0 p-0"><p class="text-light roboto fs-xs my-0 pd-0">Dental Service</p></li>
                            <li class="list-group-item bg-success border-0 m-0 p-0"><p class="text-light roboto fs-xs my-0 pd-0">Dental Service</p></li>
                            <li class="list-group-item bg-success border-0 m-0 p-0"><p class="text-light roboto fs-xs my-0 pd-0">Dental Service</p></li>
                        </ul>
                    </div>

                    <div class="col-3 text-end">
                        <p class="text-light roboto fs-sm weight-600 mb-2">Tags</p>
                        <ul class="list-group">
                            <li class="list-group-item bg-success border-0 m-0 p-0"><p class="text-light roboto fs-xs my-0 pd-0">Laravel</p></li>
                            <li class="list-group-item bg-success border-0 m-0 p-0"><p class="text-light roboto fs-xs my-0 pd-0">SASS</p></li>
                            <li class="list-group-item bg-success border-0 m-0 p-0"><p class="text-light roboto fs-xs my-0 pd-0">Bootstrap</p></li>
                            <li class="list-group-item bg-success border-0 m-0 p-0"><p class="text-light roboto fs-xs my-0 pd-0">JavaScript</p></li>
                        </ul>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <p class="text-light roboto fs-sm weight-600 mb-2">Copyright @ YYYY</p>
                    </div>

                </div>
            </footer>

        </div>

    @endsection

    <script>

        @if (isset($intraoral))

        @php
            $intraoral_arr = $check->arr($intraoral->data);

            $row1 = [
                '0' => array('55', 'open'),
                '1' => array('54', 'open'),
                '2' => array('53', 'close'),
                '3' => array('52', 'close'),
                '4' => array('51', 'close'),
                '5' => array('61', 'close'),
                '6' => array('62', 'close'),
                '7' => array('63', 'close'),
                '8' => array('64', 'open'),
                '9' => array('65', 'open')
            ];

            $row2 = [
                '10' => array('18', 'open'),
                '11' => array('17', 'open'),
                '12' => array('16', 'open'),
                '13' => array('15', 'open'),
                '14' => array('14', 'open'),
                '15' => array('13', 'close'),
                '16' => array('12', 'close'),
                '17' => array('11', 'close'),
                '18' => array('21', 'close'),
                '19' => array('22', 'close'),
                '20' => array('23', 'close'),
                '21' => array('24', 'open'),
                '22' => array('25', 'open'),
                '23' => array('26', 'open'),
                '24' => array('27', 'open'),
                '25' => array('28', 'open')
            ];

            $row3 = [
                '26' => array('48', 'open'),
                '27' => array('47', 'open'),
                '28' => array('46', 'open'),
                '29' => array('45', 'open'),
                '30' => array('44', 'open'),
                '31' => array('43', 'close'),
                '32' => array('42', 'close'),
                '33' => array('41', 'close'),
                '34' => array('31', 'close'),
                '35' => array('32', 'close'),
                '36' => array('33', 'close'),
                '37' => array('34', 'open'),
                '38' => array('35', 'open'),
                '39' => array('36', 'open'),
                '40' => array('37', 'open'),
                '41' => array('38', 'open')
            ];

            $row4 = [
                '42' => array('85', 'open'),
                '43' => array('84', 'open'),
                '44' => array('83', 'close'),
                '45' => array('82', 'close'),
                '46' => array('81', 'close'),
                '47' => array('71', 'close'),
                '48' => array('72', 'close'),
                '49' => array('73', 'close'),
                '50' => array('74', 'open'),
                '51' => array('75', 'open')
            ];

            $row_count = 0;
        @endphp

        const intraoralSettings = [
            // first row
            {
                isReversed: true,
                data: [
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' },

                    @for ($i = 0; $i < count($row1); $i++, $row_count++)
                    { 
                        type: '$row1[$row_count][1]', 
                        value: '{{ $check->null($intraoral_arr[$row_count]) }}',
                        no: '{{ $row1[$row_count][0] }}', 
                        route: '{{ asset('images/intraoral/intraoral-' . $row1[$row_count][1] . '.png') }}' 
                    },
                    @endfor

                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' }
                ]
            },
            // second row
            {
                isReversed: false,
                data: [

                    @for ($i = 0; $i < count($row2); $i++, $row_count++)
                    { 
                        type: '$row2[$row_count][1]', 
                        value: '{{ $check->null($intraoral_arr[$row_count]) }}',
                        no: '{{ $row2[$row_count][0] }}', 
                        route: '{{ asset('images/intraoral/intraoral-' . $row2[$row_count][1] . '.png') }}' 
                    },
                    @endfor
                    
                ]
            },
            // first row
            {
                isReversed: true,
                data: [

                    @for ($i = 0; $i < count($row3); $i++, $row_count++)
                    { 
                        type: '$row3[$row_count][1]', 
                        value: '{{ $check->null($intraoral_arr[$row_count]) }}',
                        no: '{{ $row3[$row_count][0] }}', 
                        route: '{{ asset('images/intraoral/intraoral-' . $row3[$row_count][1] . '.png') }}' 
                    },
                    @endfor

                ]
            },
            // second row
            {
                isReversed: false,
                data: [
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' },

                    @for ($i = 0; $i < count($row4); $i++, $row_count++)
                    { 
                        type: '$row4[$row_count][1]', 
                        value: '{{ $check->null($intraoral_arr[$row_count]) }}',
                        no: '{{ $row4[$row_count][0] }}', 
                        route: '{{ asset('images/intraoral/intraoral-' . $row4[$row_count][1] . '.png') }}' 
                    },
                    @endfor

                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' }
                ]
            }
        ];

        @else

        const intraoralSettings = [];
            
        @endif
    </script>

</body>
</html>