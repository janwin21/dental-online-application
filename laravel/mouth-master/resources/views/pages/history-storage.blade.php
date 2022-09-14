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
                    <div class="col-2 py-4"><object data="../svg/male.svg"></object></div>

                    <!-- Header User Information -->
                    <div class="col-7 ps-0 pe-4 py-4">
                        <h5 class="pb-0 mb-0 text-dark">LastName, FirstName, MI.</h5>
                        <p class="text-light-gray weight-500 pt-0 mt-0">Patient ID#1234</p>
                        <p class="fs-sm weight-400 roboto reason">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, doloremque. Dignissimos maxime veniam repellat.</p>

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
                                    data-src="SRC_URL"
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
                                    <button class="btn border-0 outlined-hover-to-grayish m-0 ms-2 p-0">
                                        <h4 class="m-0 p-0"><i class="fa-regular fa-calendar-xmark"></i></h4>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Header User Section -->
                    <div class="header-section col-3 py-4 border-start border-2 ps-4">
                        <h1 class="fs-xl anton text-light-gray float-start">16</h1>
                        <p class="text-light-gray weight-500 pt-2 ps-2 mt-0 float-start">Age</p>
                        <div class="w-100 float-start">
                            <h5 class="weight-600 pb-0 mb-0 roboto">Nickname</h5>
                            <p class="text-light-gray weight-500 pt-0 mt-0 fs-sm">Nickname<i class="ms-2 fa-solid fa-children"></i></p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Content Information -->
            <div class="content-information mt-4">
 
                <div class="section-body rounded-top bg-light p-5">
                    <div class="row">
                        
                        <!-- Medical History Section -->
                        <div class="col-12">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Medical Histories</p>
                        </div>

                        <!-- First Row -->
                        <div class="col-3 p-2">
                            <a href="#" class="w-100 btn btn-secondary p-0 m-0 border-0 shadow-none">
                                <div class="text-center rounded pt-4 pb-1">
                                    <object data="../svg/medical-history.svg"></object>
                                    <h5 class="roboto fs-sm weight-600 mt-3 mb-1">ADD</h5>
                                    <p class="roboto fs-xs mt-0">Medical History</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-3 p-2">
                            <div class="text-center rounded pt-4 pb-1 bg-light-gray hover-to-grayish border border-light border-0">
                                <object data="../svg/folder.svg"></object>
                                <form action="#" method="POST">
                                    <button type="submit" class="btn btn-danger shadow-none py-0 px-4 mt-3 rounded-pill roboto fs-xs hover-to-dark">
                                        DELETE
                                    </button>
                                </form>
                                <p class="roboto fs-xs mt-1">History# { id }</p>
                            </div>
                        </div>
                        
                        <!-- Intraoral Section -->
                        <div class="col-12 mt-4">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Intraoral Examinations</p>
                        </div>

                        <!-- Second Row -->
                        <div class="col-3 p-2">
                            <a href="#" class="w-100 btn btn-secondary p-0 m-0 border-0 shadow-none">
                                <div class="text-center rounded pt-4 pb-1">
                                    <object data="../svg/intraoral.svg"></object>
                                    <h5 class="roboto fs-sm weight-600 mt-3 mb-1">ADD</h5>
                                    <p class="roboto fs-xs mt-0">Intraoral Exam</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-3 p-2">
                            <div class="text-center rounded pt-4 pb-1 bg-light-gray hover-to-grayish border border-light border-0">
                                <object data="../svg/folder.svg"></object>
                                <form action="#" method="POST">
                                    <button type="submit" class="btn btn-danger shadow-none py-0 px-4 mt-3 rounded-pill roboto fs-xs hover-to-dark">
                                        DELETE
                                    </button>
                                </form>
                                <p class="roboto fs-xs mt-1">Intraoral# { id }</p>
                            </div>
                        </div>
                        
                        <!-- X-ray Section -->
                        <div class="col-12 mt-4">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">X-rays</p>
                        </div>

                        <!-- Second Row -->
                        <div class="col-3 p-2">
                            <a href="#" class="w-100 btn btn-secondary p-0 m-0 border-0 shadow-none">
                                <div class="text-center rounded pt-4 pb-1">
                                    <object data="../svg/x-ray.svg"></object>
                                    <h5 class="roboto fs-sm weight-600 mt-3 mb-1">ADD</h5>
                                    <p class="roboto fs-xs mt-0">X-ray</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-3 p-2">
                            <div class="text-center rounded pt-4 pb-1 bg-light-gray hover-to-grayish border border-light border-0">
                                <object data="../svg/folder.svg"></object>
                                <form action="#" method="POST">
                                    <button type="submit" class="btn btn-danger shadow-none py-0 px-4 mt-3 rounded-pill roboto fs-xs hover-to-dark">
                                        DELETE
                                    </button>
                                </form>
                                <p class="roboto fs-xs mt-1">X-ray# { id }</p>
                            </div>
                        </div>
                        
                        <!-- Screening Section -->
                        <div class="col-12 mt-4">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Screenings</p>
                        </div>

                        <!-- Second Row -->
                        <div class="col-3 p-2">
                            <a href="#" class="w-100 btn btn-secondary p-0 m-0 border-0 shadow-none">
                                <div class="text-center rounded pt-4 pb-1">
                                    <object data="../svg/screening.svg"></object>
                                    <h5 class="roboto fs-sm weight-600 mt-3 mb-1">ADD</h5>
                                    <p class="roboto fs-xs mt-0">Screening</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-3 p-2">
                            <div class="text-center rounded pt-4 pb-1 bg-light-gray hover-to-grayish border border-light border-0">
                                <object data="../svg/folder.svg"></object>
                                <form action="#" method="POST">
                                    <button type="submit" class="btn btn-danger shadow-none py-0 px-4 mt-3 rounded-pill roboto fs-xs hover-to-dark">
                                        DELETE
                                    </button>
                                </form>
                                <p class="roboto fs-xs mt-1">Screening# { id }</p>
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

</body>
</html>