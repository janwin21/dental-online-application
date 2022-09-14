@extends('layouts.master')

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

                <form action="{{ route('patient.store') }}" method="POST">
                    @csrf

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
                            <input required class="border border-0" type="text" name="last_name" placeholder="Doe">
                        </div>

                        <div class="border-bottom border-success border-2 col-4 mx-0 mt-2">
                            <input required class="border border-0" type="text" name="first_name" placeholder="John">
                        </div>

                        <div class="border-bottom border-success border-2 col-4 mx-0 mt-2">
                            <input required class="border border-0" type="text" name="middle_initial" placeholder="D.">
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
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="date" name="birth_date">
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="birth_date">Sex <strong class="text-danger ms-1">*</strong></label>
                            <div class="row mt-2">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="sex" value="male">
                                        <label class="weight-600" for="sex">M</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="sex" value="female">
                                        <label class="weight-600" for="sex">FM</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="age">Age <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-1 py-1 mt-2" type="number" name="age">
                        </div>

                        <!-- Fourth Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="religion">Religion <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="religion">
                        </div>
                        
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="nationality">Nationality <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="nationality">
                        </div>
                        
                        <!-- Fifth Row -->
                        <div class="col-5 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="nickname">Nickname <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2 mb-3" type="text" name="nickname">
                            
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1 mt-4" for="home_no">Home# <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="home_no">
                        </div>

                        <div class="col-7 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="home_address">Home Address <strong class="text-danger ms-1">*</strong></label>
                            <textarea required class="flex-grow-1 w-100 border border-secondary rounded px-2 py-1 mt-2" name="home_address" style="resize: none;"></textarea>
                        </div>
                        
                        <!-- Sixth Row -->
                        <div class="col-7 mt-4 mb-3 form-transformation">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="occupation">Occupation <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="occupation">
                        </div>

                        <div class="col-5 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="birth_date">Dental Insurance <strong class="text-danger ms-1">*</strong></label>
                            <div class="row mt-2">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="dental_insurance" value="1">
                                        <label class="weight-600" for="dental_insurance">Yes</label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="dental_insurance" value="0">
                                        <label class="weight-600" for="dental_insurance">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seventh Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="office_no">Office#</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="office_no">
                        </div>

                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="effective_date">Effective Date</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="date" name="effective_date">
                        </div>

                        <!-- Eight Row -->
                        <div class="col-5 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="phone_no">Phone#</label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="phone_no">
                        </div>
                        
                        <div class="col-7 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="email">Email Address</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="email" name="email">
                        </div>

                    </div>
                </div>

                <div class="section-body bg-light p-5 pt-4 border-top border-2 border-success">
                    <div class="row">

                        <!-- Ninth Row -->
                        <div class="col-12 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="refferer">Who may we thank for reffering you?</label>
                            <textarea class="flex-grow-1 w-100 border border-1 border-secondary rounded px-2 py-1 mt-2" name="refferer"></textarea>
                        </div>
                        
                        <!-- Tenth Row -->
                        <div class="col-12 mt-4 mb-3 d-flex flex-column">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="reason">What is your reason for your dental consultation?</label>
                            <textarea class="flex-grow-1 w-100 border border-1 border-secondary rounded px-2 py-1 mt-2" name="reason"></textarea>
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
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="guardian_name">
                        </div>

                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="guardian_occupation">Occupation</label>
                            <input class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="text" name="guardian_occupation">
                        </div>

                    </div>
                </div>

                <div class="section-body bg-light p-5 pt-4 border-top border-1 border-secondary">
                    <div class="row">

                        <p class="text-grayish roboto weight-600 fs-xs date-p">Month DD, YYYY</p>

                        <!-- Ninth Row -->
                        <div class="col-12 mt-0 d-flex flex-column text-end">
                            <div class="text-end">
                                <button type="submit" class="w-25 btn btn-success text-light hover-to-dark px-4 py-1">Confirm</button>
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

    <div class="modal-section fade modal-dialog-centered text-center">
        <div class="modal-dialog w-25 rounded-top">
            <div class="modal-content bg-light rounded-top">
            <div class="modal-header-box bg-danger text-center py-3 rounded-top">
                <h5 class="modal-title d-block text-light" id="exampleModalLabel">notificationMessage</h5>
                <p class="d-block p-0 m-0 fs-sm text-light">Mouth Masters - Dental Clinic</p>
                <button class="btn btn-danger close-btn shadow-none border border-none border-0"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body p-3">
                <p class="modal-paragraph fs-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="modal-footer p-2">
                <button type="button" class="btn cancel-btn btn-secondary px-4 py-1 shadow-none hover-to-dark" data-bs-dismiss="modal">Cancel</button>
                <form action="#" method="POST">
                    <button type="submit" class="btn btn-danger ms-2 px-4 py-1 shadow-none hover-to-dark border-light">Delete</button>
                </form>
            </div>
            </div>
        </div>
    </div>

</body>
</html>