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
 
                <div class="section-body rounded-top bg-light p-5">
                    <div class="row">
                        
                        <!-- Medical History Section -->
                        <div class="col-12">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Medical Histories</p>
                        </div>

                        <!-- First Row -->
                        <div class="col-3 p-2 text-light">
                            <div class="text-center bg-secondary rounded pt-4 pb-1">
                                <object data="{{ asset('svg/medical-history.svg') }}"></object>
                                <h5 class="roboto fs-sm weight-600 mt-3 mb-1">ADD</h5>
                                <p class="roboto fs-xs mt-0">Medical History</p>
                            </div>
                        </div>
                        
                        <div class="col-9 p-2">
                            <div class="row">

                                <!-- column -->
                                @if (count($patient->medical_histories) != 0)
                                @foreach ($patient->medical_histories as $data)

                                <div class="col-4 mb-4">
                                    <div class="text-center rounded pt-4 pb-1 bg-light-gray hover-to-grayish border border-light border-0 h-100">
                                        <object data="{{ asset("svg/folder.svg") }}"></object><br>
                                        <!-- DELETE -->
                                        <button 
                                        data-src="{{ route('medical-history.destroy', $data->id) }}"
                                        data-title="Delete Medical"
                                        data-paragraph="Do you want to delete {{ $patient->nickname }}'s medical information no. {{ $data->id }}?"
                                        data-color="bg-danger"
                                        data-btn="Delete"  
                                        data-target="POST" 
                                        class="modal-trigger btn btn-danger shadow-none py-1 mt-3 rounded roboto fs-xs hover-to-dark">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- TOUCH UPDATE -->
                                        <form class="d-inline" action="{{ route('medical-history.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                    
                                            <button class="btn btn-success shadow-none py-1 mt-3 rounded roboto fs-xs hover-to-dark text-light">
                                                <i class="fa-solid fa-door-open"></i>
                                            </button>
                                        </form>
                                        <p class="roboto fs-xs weight-600 mt-3 mb-0">History #{{ $data->id }}</p>
                                        <p class="roboto fs-xs mt-1">{{ $data->created_at->format('m-d-Y') }}</p>
                                    </div>
                                </div>
 
                                @endforeach
                                @else

                                <div class="col-4 mb-4">
                                    <div class="text-center rounded pt-4 pb-4 bg-light border border-light border-0 h-100">
                                        <object data="{{ asset("svg/no-data.svg") }}"></object>
                                        <p class="roboto fs-xs weight-600 mt-3 mb-0">Empty Data</p>
                                    </div>
                                </div>

                                @endif

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
                                    <object data="{{ asset("svg/intraoral.svg") }}"></object>
                                    <h5 class="roboto fs-sm weight-600 mt-3 mb-1">ADD</h5>
                                    <p class="roboto fs-xs mt-0">Intraoral Exam</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-9 p-2">
                            <div class="row">

                                <!-- column -->
                                @if (count($patient->intraorals) != 0)
                                @foreach ($patient->intraorals as $data)

                                <div class="col-4 mb-4">
                                    <div class="text-center rounded pt-4 pb-1 bg-light-gray hover-to-grayish border border-light border-0 h-100">
                                        <object data="{{ asset("svg/folder.svg") }}"></object><br>
                                        <!-- DELETE -->
                                        <button 
                                        data-src="{{ route('intraoral.destroy', $data->id) }}"
                                        data-title="Delete Dental Chart"
                                        data-paragraph="Do you want to delete {{ $patient->nickname }}'s dental chart no. {{ $data->id }}?"
                                        data-color="bg-danger"
                                        data-btn="Delete"  
                                        data-target="POST" 
                                        class="modal-trigger btn btn-danger shadow-none py-1 mt-3 rounded roboto fs-xs hover-to-dark">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- TOUCH UPDATE -->
                                        <form class="d-inline" action="{{ route('intraoral.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                    
                                            <button class="btn btn-success shadow-none py-1 mt-3 rounded roboto fs-xs hover-to-dark text-light">
                                                <i class="fa-solid fa-door-open"></i>
                                            </button>
                                        </form>
                                        <p class="roboto fs-xs weight-600 mt-3 mb-0">Dental Chart #{{ $data->id }}</p>
                                        <p class="roboto fs-xs mt-1">{{ $data->created_at->format('m-d-Y') }}</p>
                                    </div>
                                </div>
 
                                @endforeach
                                @else

                                <div class="col-4 mb-4">
                                    <div class="text-center rounded pt-4 pb-4 bg-light border border-light border-0 h-100">
                                        <object data="{{ asset("svg/no-data.svg") }}"></object>
                                        <p class="roboto fs-xs weight-600 mt-3 mb-0">Empty Data</p>
                                    </div>
                                </div>

                                @endif

                            </div>
                        </div>
                        
                        <!-- X-ray Section -->
                        <div class="col-12 mt-4">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">X-rays</p>
                        </div>

                        <!-- Third Row -->
                        <div class="col-3 p-2">
                            <a href="#" class="w-100 btn btn-secondary p-0 m-0 border-0 shadow-none">
                                <div class="text-center rounded pt-4 pb-1">
                                    <object data="{{ asset("svg/x-ray.svg") }}"></object>
                                    <h5 class="roboto fs-sm weight-600 mt-3 mb-1">ADD</h5>
                                    <p class="roboto fs-xs mt-0">X-ray</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-9 p-2">
                            <div class="row">

                                <!-- column -->
                                @if (count($patient->xrays) != 0)
                                @foreach ($patient->xrays as $data)

                                <div class="col-4 mb-4">
                                    <div class="text-center rounded pt-4 pb-1 bg-light-gray hover-to-grayish border border-light border-0 h-100">
                                        <object data="{{ asset("svg/folder.svg") }}"></object><br>
                                        <!-- DELETE -->
                                        <button 
                                        data-src="{{ route('xray.destroy', $data->id) }}"
                                        data-title="Delete X-Ray"
                                        data-paragraph="Do you want to delete {{ $patient->nickname }}'s x-ray examination no. {{ $data->id }}?"
                                        data-color="bg-danger"
                                        data-btn="Delete"  
                                        data-target="POST" 
                                        class="modal-trigger btn btn-danger shadow-none py-1 mt-3 rounded roboto fs-xs hover-to-dark">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- TOUCH UPDATE -->
                                        <form class="d-inline" action="{{ route('xray.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                    
                                            <button class="btn btn-success shadow-none py-1 mt-3 rounded roboto fs-xs hover-to-dark text-light">
                                                <i class="fa-solid fa-door-open"></i>
                                            </button>
                                        </form>
                                        <p class="roboto fs-xs weight-600 mt-3 mb-0">X-ray #{{ $data->id }}</p>
                                        <p class="roboto fs-xs mt-1">{{ $data->created_at->format('m-d-Y') }}</p>
                                    </div>
                                </div>
 
                                @endforeach
                                @else

                                <div class="col-4 mb-4">
                                    <div class="text-center rounded pt-4 pb-4 bg-light border border-light border-0 h-100">
                                        <object data="{{ asset("svg/no-data.svg") }}"></object>
                                        <p class="roboto fs-xs weight-600 mt-3 mb-0">Empty Data</p>
                                    </div>
                                </div>

                                @endif

                            </div>
                        </div>
                        
                        <!-- Screening Section -->
                        <div class="col-12 mt-4">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Screenings</p>
                        </div>

                        <!-- Fourth Row -->
                        <div class="col-3 p-2">
                            <a href="#" class="w-100 btn btn-secondary p-0 m-0 border-0 shadow-none">
                                <div class="text-center rounded pt-4 pb-1">
                                    <object data="{{ asset("svg/screening.svg") }}"></object>
                                    <h5 class="roboto fs-sm weight-600 mt-3 mb-1">ADD</h5>
                                    <p class="roboto fs-xs mt-0">Screening</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-9 p-2">
                            <div class="row">

                                <!-- column -->
                                @if (count($patient->screenings) != 0)
                                @foreach ($patient->screenings as $data)

                                <div class="col-4 mb-4">
                                    <div class="text-center rounded pt-4 pb-1 bg-light-gray hover-to-grayish border border-light border-0 h-100">
                                        <object data="{{ asset("svg/folder.svg") }}"></object><br>
                                        <!-- DELETE -->
                                        <button 
                                        data-src="{{ route('screening.destroy', $data->id) }}"
                                        data-title="Delete Screening Data"
                                        data-paragraph="Do you want to delete {{ $patient->nickname }}'s screening no. {{ $data->id }}?"
                                        data-color="bg-danger"
                                        data-btn="Delete"  
                                        data-target="POST" 
                                        class="modal-trigger btn btn-danger shadow-none py-1 mt-3 rounded roboto fs-xs hover-to-dark">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- TOUCH UPDATE -->
                                        <form class="d-inline" action="{{ route('screening.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                    
                                            <button class="btn btn-success shadow-none py-1 mt-3 rounded roboto fs-xs hover-to-dark text-light">
                                                <i class="fa-solid fa-door-open"></i>
                                            </button>
                                        </form>
                                        <p class="roboto fs-xs weight-600 mt-3 mb-0">Screening #{{ $data->id }}</p>
                                        <p class="roboto fs-xs mt-1">{{ $data->created_at->format('m-d-Y') }}</p>
                                    </div>
                                </div>
 
                                @endforeach
                                @else

                                <div class="col-4 mb-4">
                                    <div class="text-center rounded pt-4 pb-4 bg-light border border-light border-0 h-100">
                                        <object data="{{ asset("svg/no-data.svg") }}"></object>
                                        <p class="roboto fs-xs weight-600 mt-3 mb-0">Empty Data</p>
                                    </div>
                                </div>

                                @endif

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
        const intraoralSettings = [];
    </script>
</body>
</html>