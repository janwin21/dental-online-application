@extends('layouts.master')

@php
    $is_edited = Route::current()->getName() == 'patient.edit';
    $route = $is_edited ? route('patient.update', $patient->id) : route('patient.store');
    $check_male = ''; $check_female = '';
    $check_male = ''; $check_female = '';
    $btn = $is_edited ? 'Update' : 'Confirm';
    $color = $is_edited ? 'btn-warning' : 'bg-success';
    
    if(isset($patient)) {
        $check_male = $patient->sex == 'male' ? 'checked' : '';
        $check_female = $patient->sex == 'female' ? 'checked' : '';
        $check_diy = $patient->dental_insurance == 1 ? 'checked' : '';
        $check_din = $patient->dental_insurance == 0 ? 'checked' : '';
    }
@endphp

<!-- MAIN INFORMATION FORM -->
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
                
                <form action="{{ $route }}" method="POST">
                    @csrf

                    @if ($is_edited)
                        @method('PATCH')
                    @endif
                    
                    <input required class="d-none" type="text" name="dentist_id" value="{{ Auth::user()->id }}">

                <div class="section-body bg-light p-5">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Personal Information</p>
                        </div>

                        <!-- First Row -->
                        <div class="col-12 mt-3">
                            <label class="roboto weight-500 mb-0 pb-0 ps-1" for="name">Name <strong class="text-danger ms-1">*</strong></label>
                        </div>

                        <div class="border-bottom border-success border-2 col-4 mx-0 mt-2">
                            <input required class="border border-0" type="text" name="last_name" placeholder="Doe" value="{{ $is_edited ? $patient->last_name : '' }}">
                        </div>

                        <div class="border-bottom border-success border-2 col-4 mx-0 mt-2">
                            <input required class="border border-0" type="text" name="first_name" placeholder="John" value="{{ $is_edited ? $patient->first_name : '' }}">
                        </div>

                        <div class="border-bottom border-success border-2 col-4 mx-0 mt-2">
                            <input required class="border border-0" type="text" name="middle_initial" placeholder="D." value="{{ $is_edited ? $patient->middle_initial : '' }}">
                        </div>
                        
                        <div class="col-4 mt-2">
                            <p class="fs-xs text-secondary roboto weight-600 px-1">last name</p>
                        </div>
                        
                        <div class="col-4 mt-2">
                            <p class="fs-xs text-secondary roboto weight-600 px-1">first name</p>
                        </div>
                        
                        <div class="col-4 mt-2">
                            <p class="fs-xs text-secondary roboto weight-600 px-1">middle initial</p>
                        </div>

                        <!-- Second Row -->
                        <div class="col-7 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="birth_date">Birth Date <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="date" name="birth_date" value="{{ $is_edited ? $check->retime($patient->birth_date) : '' }}">
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="birth_date">Sex <strong class="text-danger ms-1">*</strong></label>
                            <div class="row mt-2">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input {{ $check_male }} required type="radio" name="sex" value="male">
                                        <label class="weight-600" for="sex">M</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input {{ $check_female }} required type="radio" name="sex" value="female">
                                        <label class="weight-600" for="sex">FM</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="age">Age <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-1 py-1 mt-2" type="number" name="age" value="{{ $is_edited ? $patient->age : '' }}">
                        </div>

                        <!-- Fourth Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="religion">Religion <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="religion" value="{{ $is_edited ? $patient->religion : '' }}">
                        </div>
                        
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="nationality">Nationality <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="nationality" value="{{ $is_edited ? $patient->nationality : '' }}">
                        </div>
                        
                        <!-- Fifth Row -->
                        <div class="col-5 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="nickname">Nickname <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2 mb-3" type="text" name="nickname" value="{{ $is_edited ? $patient->nickname : '' }}">
                            
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1 mt-4" for="home_no">Home# <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="home_no" value="{{ $is_edited ? $patient->home_no : '' }}">
                        </div>

                        <div class="col-7 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="home_address">Home Address <strong class="text-danger ms-1">*</strong></label>
                            <textarea required class="flex-grow-1 w-100 border border-secondary rounded px-2 py-1 mt-2" name="home_address" style="resize: none;">{{ $is_edited ? $patient->home_address : '' }}</textarea>
                        </div>
                        
                        <!-- Sixth Row -->
                        <div class="col-7 mt-4 mb-3 form-transformation">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="occupation">Occupation <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="occupation" value="{{ $is_edited ? $patient->occupation : '' }}">
                        </div>

                        <div class="col-5 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="birth_date">Dental Insurance <strong class="text-danger ms-1">*</strong></label>
                            <div class="row mt-2">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input {{ $check_diy }} required type="radio" name="dental_insurance" value="1">
                                        <label class="weight-600" for="dental_insurance">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input {{ $check_din }} required type="radio" name="dental_insurance" value="0">
                                        <label class="weight-600" for="dental_insurance">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seventh Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="office_no">Office#</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="office_no" value="{{ $is_edited ? $patient->office_no : '' }}">
                        </div>

                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="effective_date">Effective Date</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="date" name="effective_date" value="{{ $is_edited ? $check->retime_empty($patient->effective_date) : '' }}">
                        </div>

                        <!-- Eight Row -->
                        <div class="col-5 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="phone_no">Phone#</label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="phone_no" value="{{ $is_edited ? $patient->phone_no : '' }}">
                        </div>
                        
                        <div class="col-7 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="email">Email Address</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="email" name="email" value="{{ $is_edited ? $patient->email : '' }}">
                        </div>

                    </div>
                </div>

                <div class="section-body bg-light p-5 pt-4 border-top border-2 border-success">
                    <div class="row">

                        <!-- Ninth Row -->
                        <div class="col-12 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="refferer">Who may we thank for reffering you?</label>
                            <textarea class="flex-grow-1 w-100 border border-1 border-secondary rounded px-2 py-1 mt-2" name="refferer">{{ $is_edited ? $patient->refferer : '' }}</textarea>
                        </div>
                        
                        <!-- Tenth Row -->
                        <div class="col-12 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="reason">What is your reason for your dental consultation?</label>
                            <textarea class="flex-grow-1 w-100 border border-1 border-secondary rounded px-2 py-1 mt-2" name="reason">{{ $is_edited ? $patient->reason : '' }}</textarea>
                        </div>

                    </div>
                </div>

                <!-- Minor Section -->
                <div class="section-title bg-success px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-child-reaching me-2"></i>Minor</h6>
                </div>

                <div class="section-body bg-light p-5">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-danger weight-500 fs-sm pt-0 mt-0">Required for minor<strong class="ms-1">*</strong></p>
                        </div>

                        <!-- First Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="guardian_name">Parent / Guardian Name</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="guardian_name" value="{{ $is_edited ? $patient->guardian_name : '' }}">
                        </div>

                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="guardian_occupation">Occupation</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="guardian_occupation" value="{{ $is_edited ? $patient->guardian_occupation : '' }}">
                        </div>

                    </div>
                </div>

                <div class="section-body bg-light p-5 pt-4 border-top border-1 border-secondary">
                    <div class="row">

                        <p class="text-grayish roboto weight-600 fs-xs date-p">Month DD, YYYY</p>

                        <!-- Ninth Row -->
                        <div class="col-12 mt-0 d-flex flex-column text-end">
                            <div class="text-end">
                                <button type="submit" class="w-25 btn {{ $color }} text-light hover-to-dark px-4 py-1">{{ $btn }}</button>
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