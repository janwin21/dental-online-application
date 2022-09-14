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
                    @if (isset($patient))

                    <!-- Left SVG Image -->
                    <div class="col-2 py-4"><object data="{{ asset('svg/male.svg') }}"></object></div>

                    <!-- Header User Information -->
                    <div class="col-7 ps-0 pe-4 py-4">
                        <h5 class="pb-0 mb-0 text-dark">{{ $patient->last_name }}, {{ $patient->first_name }}, {{ $patient->middle_initial }}</h5>
                        <p class="text-light-gray weight-500 pt-0 mt-0">Patient ID#{{ $patient->id }}</p>
                        <p class="fs-sm weight-400 roboto reason">{{ $patient->reason }}</p>

                        <div class="header-icons mt-4 pt-2">
                            <div class="row">

                                <div class="header-left col-6 text-start">
                                    <button class="btn border-0 outlined-hover-to-grayish m-0 p-0">
                                        <h4 class="m-0 p-0"><i class="fa-solid fa-circle-left"></i></h4>
                                    </button>
                                    <button class="btn border-0 outlined-hover-to-grayish m-0 p-0">
                                        <h4 class="m-0 p-0"><i class="fa-solid fa-circle-right"></i></h4>
                                    </button>
                                </div>
                                
                                <div class="header-right col-6 text-end">
                                    <button
                                    data-src="{{ route('patient.create') }}"
                                    data-title="Add Patients"
                                    data-paragraph="Do you want to add more patients?"
                                    data-color="bg-success"
                                    data-btn="Add"    
                                    class="modal-trigger btn border-0 outlined-hover-to-grayish m-0 ms-2 p-0">
                                        <h4 class="m-0 p-0"><i class="fa-solid fa-hospital-user"></i></h4>
                                    </button>
                                    <button
                                    data-src="SRC_URL"
                                    data-title="Update { nickname }"
                                    data-paragraph="Do you want to update { nickname }'s patient information?"
                                    data-color="bg-warning"
                                    data-btn="Update"    
                                    class="modal-trigger btn border-0 outlined-hover-to-grayish m-0 ms-2 p-0">
                                        <h4 class="m-0 p-0"><i class="fa-solid fa-file-pen"></i></h4>
                                    </button>
                                    <button
                                    data-src="SRC_URL"
                                    data-title="Delete Patient"
                                    data-paragraph="Do you want to delete { nickname }'s patient information?"
                                    data-color="bg-danger"
                                    data-btn="Delete"    
                                    class="modal-trigger btn border-0 outlined-hover-to-grayish m-0 ms-1 p-0">
                                        <h4 class="m-0 p-0"><i class="fa-solid fa-trash"></i></h4>
                                    </button>
                                    <a href="{{ route('page.calendar') }}" class="btn border-0 outlined-hover-to-grayish m-0 ms-2 p-0">
                                        <h4 class="m-0 p-0"><i class="fa-regular fa-calendar-xmark"></i></h4>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Header User Section -->
                    <div class="header-section col-3 py-4 border-start border-2 ps-4">
                        <h1 class="fs-xl anton text-light-gray float-start">{{ $patient->age }}</h1>
                        <p class="text-light-gray weight-500 pt-2 ps-2 mt-0 float-start">Age</p>
                        <div class="w-100 float-start">
                            <h5 class="weight-600 pb-0 mb-0 roboto">{{ $patient->nickname }}</h5>
                            <p class="text-light-gray weight-500 pt-0 mt-0 fs-sm">Nickname<i class="ms-2 fa-solid fa-children"></i></p>
                        </div>
                    </div>
                        
                    @endif

                </div>

            </div>

            <!-- Content Information -->
            <div class="content-information mt-4">

                <div class="section-title bg-success rounded-top px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-circle-info me-2"></i>Information</h6>
                </div>

                <!-- Main Information Section -->
                <div class="section-body bg-light p-5">
                    <div class="row">

                        <!-- First Row -->
                        <div class="col-6">
                            <p class="roboto weight-600 mb-0 pb-0">Male</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-venus-mars me-2 text-success"></i>Sex</p>
                        </div>

                        <div class="col-6">
                            <p class="roboto weight-600 mb-0 pb-0">Catholic</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-cross me-2 text-success"></i>Religion</p>
                        </div>

                        <!-- Second Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">MM/DD/YYYY</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-cake-candles me-2 text-success"></i>Birth Date</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">patient@gmail.com</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-envelope me-2 text-success"></i>Email Address</p>
                        </div>

                        <!-- Third Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">Address City</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-house me-2 text-success"></i>Home Address</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">Filipino</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-flag me-2 text-success"></i>Nationality</p>
                        </div>

                        <!-- Fourth Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">homeNo</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Home#</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">cellNo</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Cellphone#</p>
                        </div>

                        <!-- Fifth Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">programmer</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-briefcase me-2 text-success"></i>Occupation</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">officeNo</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Office#</p>
                        </div>

                    </div>
                </div>

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
                            <p class="roboto weight-600 mb-0 pb-0">Dr. Einstein</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Previous Doctor</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">MM/DD/YYYY</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Last Dentist Visit</p>
                        </div>
                        
                        <div class="col-12 pt-5">
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-user-nurse me-2 text-success"></i>Medical History</p>
                        </div>

                        <!-- Second Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">Dr. Kwak Kwak</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0"><i class="fa-solid fa-star me-2 text-gold"></i>Physician</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">Specialty</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Specialty</p>
                        </div>

                        <!-- Third Row -->
                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">Office Location City</p>
                            <p class="roboto text-grayish weight-500 fs-sm pt-0 mt-0">Office Address</p>
                        </div>

                        <div class="col-6 pt-3">
                            <p class="roboto weight-600 mb-0 pb-0">OfficeNo</p>
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
                                    <p class="roboto weight-500 mb-0 pb-0 text-success">YES</p>
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
                                    <p class="roboto weight-500 mb-0 pb-0 text-danger">NO</p>
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
                                    <p class="roboto weight-500 mb-0 pb-0 text-success">YES</p>
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
                                    <p class="roboto weight-500 mb-0 pb-0 text-danger">NO</p>
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
                                    <p class="roboto weight-500 mb-0 pb-0 text-success">YES</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Do you use tobacco products?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-danger">NO</p>
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
                                    <p class="roboto weight-500 mb-0 pb-0 text-success">YES</p>
                                </div>
                            </div>
                        </div>

                        <div class="section-green col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>Are you allergic to any of the following:</p>

                                    <!-- Add Information -->
                                    <div class="d-flex flex-row flex-wrap">
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Local Anesthetics</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Penicillin, Antibiotics</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Sulfa drugs</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Aspirin</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Latex</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Others:</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-danger">NO</p>
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
                                    <p class="roboto weight-600 mb-0 pb-0 text-dark">HH:MM:SS</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Are you pregnant?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-danger">NO</p>
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
                                    <p class="roboto weight-500 mb-0 pb-0 text-success">YES</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-10">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Are you taking birth pills?</p>
                                </div>
                                <div class="col-2">
                                    <p class="roboto weight-500 mb-0 pb-0 text-danger">NO</p>
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
                                    <p class="roboto weight-600 mb-0 pb-0 text-dark">blood_type</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6 pt-5">
                            <div class="row">
                                <div class="col-5">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0">Blood pressure:</p>
                                </div>
                                <div class="col-7 text-end">
                                    <p class="roboto weight-600 mb-0 pb-0 text-dark">blood_pressure</p>
                                </div>
                            </div>
                        </div>

                        <!-- Eight Row -->
                        <div class="section-green col-12 pt-5">
                            <div class="row">
                                <div class="col-12">
                                    <p class="roboto text-grayish fs-sm weight-500 pt-0 mt-0"><i class="fa-solid fa-list me-2 text-success"></i>Do you have or have you had any of the following?</p>

                                    <!-- Add Information -->
                                    <div class="d-flex flex-row flex-wrap">
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Local Anesthetics</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Penicillin, Antibiotics</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Sulfa drugs</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Aspirin</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Latex</p>
                                        </div>
                                        <div class="alert alert-success rounded m-1 border-0 px-4 py-1">
                                            <p class="roboto fs-sm weight-600 m-0 p-0 text-dark">Others:</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

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
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-check text-success me-2"></i>Periapical</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-xmark text-danger me-2"></i>Panoramic</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-xmark text-danger me-2"></i>Cephalometric</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-xmark text-danger me-2"></i>Occlusal (Upper/Lower)</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

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
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-check text-success me-2"></i>Occlusal</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-xmark text-danger me-2"></i>Early Periodontitis</p>
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
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-check text-success me-2"></i>Occlusal</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-xmark text-danger me-2"></i>Early Periodontitis</p>
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
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-check text-success me-2"></i>Occlusal</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-xmark text-danger me-2"></i>Early Periodontitis</p>
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
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-check text-success me-2"></i>Occlusal</p>
                                </div>
                                <div class="alert alert-light m-1 border-0 px-4 py-1">
                                    <p class="roboto fs-sm weight-600 m-0 p-0 text-dark"><i class="fa-solid fa-xmark text-danger me-2"></i>Early Periodontitis</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

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
        const intraoralSettings = [
            // first row
            {
                isReversed: true,
                data: [
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'open', no: '55' },
                    { type: 'open', no: '54' },
                    { type: 'close', no: '53' },
                    { type: 'close', no: '52' },
                    { type: 'close', no: '51' },
                    { type: 'close', no: '61' },
                    { type: 'close', no: '62' },
                    { type: 'close', no: '63' },
                    { type: 'open', no: '64' },
                    { type: 'open', no: '65' },
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' }
                ]
            },
            // second row
            {
                isReversed: false,
                data: [
                    { type: 'open', no: '18' },
                    { type: 'open', no: '17' },
                    { type: 'open', no: '16' },
                    { type: 'open', no: '15' },
                    { type: 'open', no: '14' },
                    { type: 'close', no: '13' },
                    { type: 'close', no: '12' },
                    { type: 'close', no: '11' },
                    { type: 'close', no: '21' },
                    { type: 'close', no: '22' },
                    { type: 'close', no: '23' },
                    { type: 'open', no: '24' },
                    { type: 'open', no: '25' },
                    { type: 'open', no: '26' },
                    { type: 'open', no: '27' },
                    { type: 'open', no: '28' }
                ]
            },
            // first row
            {
                isReversed: true,
                data: [
                    { type: 'open', no: '48' },
                    { type: 'open', no: '47' },
                    { type: 'open', no: '46' },
                    { type: 'open', no: '45' },
                    { type: 'open', no: '44' },
                    { type: 'close', no: '43' },
                    { type: 'close', no: '42' },
                    { type: 'close', no: '41' },
                    { type: 'close', no: '31' },
                    { type: 'close', no: '32' },
                    { type: 'close', no: '33' },
                    { type: 'open', no: '34' },
                    { type: 'open', no: '35' },
                    { type: 'open', no: '36' },
                    { type: 'open', no: '37' },
                    { type: 'open', no: '38' }
                ]
            },
            // second row
            {
                isReversed: false,
                data: [
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'open', no: '85', value: 'D' },
                    { type: 'open', no: '84' },
                    { type: 'close', no: '83' },
                    { type: 'close', no: '82' },
                    { type: 'close', no: '81' },
                    { type: 'close', no: '71' },
                    { type: 'close', no: '72' },
                    { type: 'close', no: '73' },
                    { type: 'open', no: '74' },
                    { type: 'open', no: '75' },
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' }
                ]
            }
        ];
    </script>

</body>
</html>