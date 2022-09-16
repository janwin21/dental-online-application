@extends('layouts.master')

<!-- MEDICAL HISTORY FORM -->
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
        'resources/js/pages/form.js'
    ])
    
</head>
<body>

    @section('page-content')
    
        <!-- Main Content -->
        <div class="col-7 p-4">

            <!-- Content Information -->
            <div class="form-information content-information">

                <div class="section-title bg-success rounded-top px-4 py-4 text-center">
                    <h5 class="roboto text-light-gray weight-600 m-0 mt-3 p-0">Dental Clinic Form</h5>
                    <p class="roboto text-light-gray weight-500">Mouth Master - Dental Clinic</p>
                </div>

                <form action="{{ route('medical-history.store') }}" method="POST">
                    @csrf

                    <input required class="d-none" type="number" name="patient_id" value="{{ $patient->id }}">
                    <input required class="d-none" type="number" name="dentist_id" value="{{ Auth::user()->id }}">

                <div class="section-body bg-light p-5">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Dental History</p>
                        </div>

                        <!-- First Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="previous_dentist">Previous Dentist <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="previous_dentist" placeholder="Dr. Doctor">
                        </div>
                        
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="last_dental_visit">Last Dental Visit <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="last_dental_visit">
                        </div>

                    </div>
                </div>

                <!-- Minor Section -->
                <div class="section-title bg-success px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-clock-rotate-left me-2"></i>Medical History</h6>
                </div>

                <div class="section-body bg-light p-5 pt-4 border-top border-2 border-success">
                    <div class="row">

                        <!-- First Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="physician">Name of Physician <strong class="text-danger ms-1">*</strong></label>
                            <input readonly required class="w-100 border border-secondary border-1 rounded px-3 py-1 mt-2" type="text" name="physician" placeholder="Dr. Doctor" 
                            value="Dr. {{ Auth::user()->first_name }} {{ Auth::user()->middle_initial }} {{ Auth::user()->last_name }}">
                        </div>
                        
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="specialty">Specialty <strong class="text-danger ms-1">*</strong></label>
                            <input readonly required class="w-100 border border-secondary border-1 rounded px-3 py-1 mt-2" type="text" name="specialty" value="{{ Auth::user()->specialty }}">
                        </div>

                        <!-- Second Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="office_address">Office Address <strong class="text-danger ms-1">*</strong></label>
                            <input readonly required class="w-100 border border-secondary border-1 rounded px-3 py-1 mt-2" type="text" name="office_address" value="{{ Auth::user()->office_address }}">
                        </div>
                        
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="office_no">Office# <strong class="text-danger ms-1">*</strong></label>
                            <input readonly required class="w-100 border border-secondary border-1 rounded px-3 py-1 mt-2" type="text" name="office_no" value="{{ Auth::user()->office_no }}">
                        </div>

                    </div>
                </div>
                

                <div class="section-body bg-light p-5 border-top border-secondary border-1">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-secondary weight-500 fs-sm pt-0 mt-0">Medical Survey</p>
                        </div>

                        <!-- First Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q1">Q1. Are you in good health? <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="q1" value="1">
                                        <label class="weight-600" for="q1">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="q1" value="0">
                                        <label class="weight-600" for="q1">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q2">Q2. Are you under medical treatment right now? <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="q2" value="1">
                                        <label class="weight-600" for="q2">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="q2" value="0">
                                        <label class="weight-600" for="q2">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-9 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q2_text">If so, what is the condition being treated? <strong class="text-danger ms-1">*</strong></label>
                            <textarea required class="flex-grow-1 w-100 border border-secondary rounded px-2 py-1 mt-2" name="q2_text" style="resize: none;" placeholder="Type 'none' to fill empty"></textarea>
                        </div>

                        <!-- Third Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q3">Q3. Have you ever had serious illness or surgical operation?  <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="q3" value="1">
                                        <label class="weight-600" for="q3">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="q3" value="0">
                                        <label class="weight-600" for="q3">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-9 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q3_text">If so, what illness or operation? <strong class="text-danger ms-1">*</strong></label>
                            <textarea required class="flex-grow-1 w-100 border border-secondary rounded px-2 py-1 mt-2" name="q3_text" style="resize: none;" placeholder="Type 'none' to fill empty"></textarea>
                        </div>

                        <!-- Fourth Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q4">Q4. Have you ever been hospitalized?  <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="q4" value="1">
                                        <label class="weight-600" for="q4">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="q4" value="0">
                                        <label class="weight-600" for="q4">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-9 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q4_text">If so, when and why? <strong class="text-danger ms-1">*</strong></label>
                            <textarea required class="flex-grow-1 w-100 border border-secondary rounded px-2 py-1 mt-2" name="q4_text" style="resize: none;" placeholder="Type 'none' to fill empty"></textarea>
                        </div>

                        <!-- Fifth Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q5">Q5. Are taking any prescription/non-prescription medication? <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="q5" value="1">
                                        <label class="weight-600" for="q5">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="q5" value="0">
                                        <label class="weight-600" for="q5">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-9 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q5_text">If so, please specify: <strong class="text-danger ms-1">*</strong></label>
                            <textarea required class="flex-grow-1 w-100 border border-secondary rounded px-2 py-1 mt-2" name="q5_text" style="resize: none;" placeholder="Type 'none' to fill empty"></textarea>
                        </div>

                        <!-- Sixth Row -->
                        <div class="col-9 mt-4 mb-3 form-transformation">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q6">Q6. Do you use tobacco products? <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="q6" value="1">
                                        <label class="weight-600" for="q6">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="q6" value="0">
                                        <label class="weight-600" for="q6">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seventh Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q7">Q7. Do you use alcohol, cocaine or other dangerous drugs? <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="q7" value="1">
                                        <label class="weight-600" for="q7">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="q7" value="0">
                                        <label class="weight-600" for="q7">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seventh Row -->
                        <div class="col-12 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="q8">Q8. Are you allergic to any of the following:</label>
                        </div>

                        <div class="col-12 mt-0 mb-3">
                            <div class="d-flex flex-row flex-wrap justify-content-start">
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="allergy1" value="Local Anesthetics">
                                    <label class="text-light ms-1" for="allergy1">Local Anesthetics ( e.g. Lidocaine)</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="allergy2" value="Penicillin, Antibiotics">
                                    <label class="text-light ms-1" for="allergy2">Penicillin, Antibiotics</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="allergy3" value="Sulfa drugs">
                                    <label class="text-light ms-1" for="allergy3">Sulfa drugs</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="allergy4" value="Aspirin">
                                    <label class="text-light ms-1" for="allergy4">Aspirin</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="allergy5" value="Latex">
                                    <label class="text-light ms-1" for="allergy5">Latex</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section-body bg-light p-5 border-top border-secondary border-1">
                    <div class="row">

                        <div class="col-4 mb-0 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="bleeding_time">Bleeding Time <strong class="text-danger ms-1">*</strong></label>
                            <input required type="time" class="flex-grow-1 w-100 border border-secondary rounded px-2 py-1 mt-2" name="bleeding_time" style="resize: none;">
                        </div>

                        <div class="col-4 mb-0 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="blood_type">Blood Type <strong class="text-danger ms-1">*</strong></label>
                            <input required type="text" class="w-100 border border-secondary rounded px-3 py-1 mt-2" name="blood_type" style="resize: none;">
                        </div>

                        <div class="col-4 mb-0 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="blood_pressure">Blood Pressure <strong class="text-danger ms-1">*</strong></label>
                            <input required type="number" class="w-100 border border-secondary rounded px-3 py-1 mt-2" name="blood_pressure" style="resize: none;">
                        </div>

                    </div>
                </div>

                <!-- Minor Section -->
                <div class="section-title bg-success px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-venus me-2"></i></i>For Women Only</h6>
                </div>
                
                <div class="section-body bg-light p-5">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-danger weight-500 fs-sm pt-0 mt-0">Required for women<strong class="ms-1">*</strong></p>
                        </div>

                        <!-- First Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="women_q1">Are you pregnant?</label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input type="radio" name="women_q1" value="1">
                                        <label class="weight-600" for="women_q1">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input type="radio" name="women_q1" value="0">
                                        <label class="weight-600" for="women_q1">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="women_q2">Are you nursing?</label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input type="radio" name="women_q2" value="1">
                                        <label class="weight-600" for="women_q2">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input type="radio" name="women_q2" value="0">
                                        <label class="weight-600" for="women_q2">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Third Row -->
                        <div class="col-9 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="women_q3">Are you taking birth pills?</label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input type="radio" name="women_q3" value="1">
                                        <label class="weight-600" for="women_q3">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input type="radio" name="women_q3" value="0">
                                        <label class="weight-600" for="women_q3">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <!-- Illness -->
                <div class="section-body border-top border-1 border-secondary bg-light p-5">
                    <div class="row">

                        <!-- First Row -->
                        <div class="col-12 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="illness">Do you have or have you had any of the following? Check which apply</label>
                        </div>

                        <div class="col-12 mt-0 mb-3">
                            <div class="d-flex flex-row flex-wrap justify-content-start">
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness1" value="High Blood Pressure">
                                    <label class="text-light ms-1" for="illness1">High Blood Pressure</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness2" value="Low Blood Pressure">
                                    <label class="text-light ms-1" for="illness2">Low Blood Pressure</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness3" value="Epilepsy / Convulsions">
                                    <label class="text-light ms-1" for="illness3">Epilepsy / Convulsions</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness4" value="AIDS / HIV infection">
                                    <label class="text-light ms-1" for="illness4">AIDS / HIV infection</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness5" value="Sexually Transmitted disease">
                                    <label class="text-light ms-1" for="illness5">Sexually Transmitted disease</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness6" value="Stomach Troubles / Ulcers">
                                    <label class="text-light ms-1" for="illness6">Stomach Troubles / Ulcers</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness7" value="Fainting Seizure">
                                    <label class="text-light ms-1" for="illness7">Fainting Seizure</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness8" value="Rapid weight loss">
                                    <label class="text-light ms-1" for="illness8">Rapid weight loss</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness9" value="Radiation Therapy">
                                    <label class="text-light ms-1" for="illness9">Radiation Therapy</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness10" value="Joint replacement / Implant">
                                    <label class="text-light ms-1" for="illness10">Joint replacement / Implant</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness11" value="Heart surgery">
                                    <label class="text-light ms-1" for="illness11">Heart surgery</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness12" value="Heart Attack">
                                    <label class="text-light ms-1" for="illness12">Heart Attack</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness13" value="Thyroid Problem">
                                    <label class="text-light ms-1" for="illness13">Thyroid Problem</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness14" value="Heart Disease">
                                    <label class="text-light ms-1" for="illness14">Heart Disease</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness15" value="Heart Murmur">
                                    <label class="text-light ms-1" for="illness15">Heart Murmur</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness16" value="Hepatitis / Liver Disease">
                                    <label class="text-light ms-1" for="illness16">Hepatitis / Liver Disease</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness17" value="Rheumatic fever">
                                    <label class="text-light ms-1" for="illness17">Rheumatic fever</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness18" value="Hay fever / Allergies">
                                    <label class="text-light ms-1" for="illness18">Hay fever / Allergies</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness19" value="Respiratory Problems">
                                    <label class="text-light ms-1" for="illness19">Respiratory Problems</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness20" value="Hepatitis / Jaundice">
                                    <label class="text-light ms-1" for="illness20">Hepatitis / Jaundice</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness21" value="Tuberculosis">
                                    <label class="text-light ms-1" for="illness21">Tuberculosis</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness22" value="Swollen ankles">
                                    <label class="text-light ms-1" for="illness22">Swollen ankles</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness23" value="Kidney Disease">
                                    <label class="text-light ms-1" for="illness23">Kidney Disease</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness24" value="Diabetes">
                                    <label class="text-light ms-1" for="illness24">Diabetes</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness25" value="Chest Pain">
                                    <label class="text-light ms-1" for="illness25">Chest Pain</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness26" value="Stroke">
                                    <label class="text-light ms-1" for="illness26">Stroke</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness27" value="Cancer / Tumors">
                                    <label class="text-light ms-1" for="illness27">Cancer / Tumors</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness28" value="Anemia">
                                    <label class="text-light ms-1" for="illness28">Anemia</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness29" value="Angina">
                                    <label class="text-light ms-1" for="illness29">Angina</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness30" value="Asthma">
                                    <label class="text-light ms-1" for="illness30">Asthma</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness31" value="Emphysema">
                                    <label class="text-light ms-1" for="illness31">Emphysema</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness32" value="Bleeding Problems">
                                    <label class="text-light ms-1" for="illness32">Bleeding Problems</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness33" value="Blood Diseases">
                                    <label class="text-light ms-1" for="illness33">Blood Diseases</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness34" value="Head Injuries">
                                    <label class="text-light ms-1" for="illness34">Head Injuries</label>
                                </div>
                                <div class="bg-success rounded-pill m-1 px-4 py-1">
                                    <input type="checkbox" name="illness35" value="Arthris / Rheumatism">
                                    <label class="text-light ms-1" for="illness35">Arthris / Rheumatism</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section-body bg-light p-5 pt-4 border-top border-1 border-secondary">
                    <div class="row">

                        <p class="text-grayish roboto weight-600 fs-xs date-p">Month DD, YYYY</p>

                        <!-- Last Row -->
                        <div class="col-12 d-flex flex-column text-end">
                            <div class="text-end">
                                <button type="submit" class="w-25 btn btn-success text-light hover-to-dark px-4 py-1 ms-1">Confirm</button>
                            </div>
                        </div>

                    </div>
                </div>

                </form>

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

</body>
</html>