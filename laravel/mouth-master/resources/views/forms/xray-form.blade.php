@extends('layouts.master')

<!-- XRAY PAGE -->
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

                <form action="{{ route('xray.store') }}" method="POST">
                    @csrf
                    
                    <input class="d-none" type="number" name="patient_id" value="{{ $patient->id }}">

                <div class="section-body bg-light p-5">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">X-ray Form</p>
                        </div>

                        <!-- First Row -->
                        <div class="col-3 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="p1">Peripical  <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="p1" value="1">
                                        <label class="weight-600" for="p1"><i class="fa-solid fa-check text-dark"></i></label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="p1" value="0">
                                        <label class="weight-600" for="p1"><i class="fa-solid fa-xmark text-danger"></i></label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="p2">Panoramic <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="p2" value="1">
                                        <label class="weight-600" for="p2"><i class="fa-solid fa-check text-dark"></i></label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="p2" value="0">
                                        <label class="weight-600" for="p2"><i class="fa-solid fa-xmark text-danger"></i></label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="p3">Cephalometric <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="p3" value="1">
                                        <label class="weight-600" for="p3"><i class="fa-solid fa-check text-dark"></i></label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="p3" value="0">
                                        <label class="weight-600" for="p3"><i class="fa-solid fa-xmark text-danger"></i></label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="p4">Occlusal (Upper/Lower) <strong class="text-danger me-1">*</strong></label>
                        </div>

                        <div class="col-3 mt-4 mb-3">
                            <div class="row">
                                <div class="col-6 m-0 p-0">
                                    <div class="pe-3 border border-0 rounded-start form-control-left py-1 px-2 text-end">
                                        <input required type="radio" name="p4" value="1">
                                        <label class="weight-600" for="p4"><i class="fa-solid fa-check text-dark"></i></label><br>
                                    </div>
                                </div>
                                <div class="col-6 m-0 p-0">
                                    <div class="ps-3 border border-0 rounded-end form-control-right py-1 px-2">
                                        <input required type="radio" name="p4" value="0">
                                        <label class="weight-600" for="p4"><i class="fa-solid fa-xmark text-danger"></i></label><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section-body bg-light p-5 pt-4 border-top border-1 border-secondary">
                    <div class="row">

                        <p class="text-grayish roboto weight-600 fs-xs date-p">Month DD, YYYY</p>

                        <!-- Ninth Row -->
                        <div class="col-12 mt-0 d-flex flex-column text-end">
                            <div class="text-end">
                                <button class="w-25 btn btn-success text-light hover-to-dark px-4 py-1">Confirm</button>
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