@extends('layouts.master')

<!-- PATIENT PAGE FORM -->
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
        <div class="col-10 p-4">

            <!-- Content Information -->
            <div class="form-information content-information">

                <div class="section-title bg-success rounded-top px-4 py-4 text-center">
                    <h5 class="roboto text-light-gray weight-600 m-0 mt-3 p-0">Dental Clinic List</h5>
                    <p class="roboto text-light-gray weight-500">Mouth Master - Dental Clinic</p>
                </div>

                <form action="#" method="POST">

                <div class="section-body bg-light px-3 py-5">
                    <div class="row">
                        
                        <div class="col-12">
                            <p class="roboto text-grayish weight-600">Patients</p>
                            <div class="col-12 mt-0 d-flex flex-column text-end">
                            </div>
                        </div>

                       <!-- First Row Table -->
                        <div class="col-12">
                            <div class="logbook w-100 pb-4">
                                <table class="w-100">
                                    <tr class="py-0 my-0 text-center bg-success">
                                        <th><p class="text-dark roboto weight-600 m-1 p-0">NAME</p></th>
                                        <th><p class="text-dark roboto weight-600 m-1 p-0">AGE</p></th>
                                        <th><p class="text-dark roboto weight-600 m-1 p-0">SEX</p></th>
                                        <th><p class="text-dark roboto weight-600 m-1 p-0">CONTACT #</p></th>
                                        <th><p class="text-dark roboto weight-600 m-1 p-0">ADDRESS</p></th>
                                        <th><p class="text-dark roboto weight-600 m-1 p-0"></p></th>
                                    </tr>

                                    @if (isset($patients))
                                    @foreach ($patients as $patient)

                                    <tr class="py-0 my-0 text-start">
                                        <td class="py-2"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ $patient->last_name }}, {{ $patient->first_name }}, {{ $patient->middle_initial }}.</p></td>
                                        <td class="text-center py-2"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ $patient->age }}</p></td>
                                        <td class="text-center py-2"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ $patient->sex }}</p></td>
                                        <td class="text-center py-2"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ $patient->home_address }}</p></td>
                                        <td class="text-center py-2"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ (isset($patient->phone_no)) ? $patient->phone_no : 'none' }}</p></td>
                                        <td class="text-end py-2 pe-2" width="20%">
                                            <button class="btn btn-danger hover-to-dark text-light rounded px-2 py-1"><i class="fa-solid fa-trash"></i></button>
                                            <button class="btn btn-warning hover-to-dark text-light rounded px-2 py-1"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <a href="{{ route('patient.show', $patient->id) }}" class="btn btn-success hover-to-dark text-light rounded px-2 py-1"><i class="fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                    @endif

                                </table>
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