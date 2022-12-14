@extends('layouts.master')

<!-- LOGBOOK FORM -->
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
                    <h5 class="roboto text-light-gray weight-600 m-0 mt-3 p-0">Dental Clinic Logbook</h5>
                    <p class="roboto text-light-gray weight-500">Mouth Master - Dental Clinic</p>
                </div>

                <div class="section-body bg-light px-3 py-5">
                    <div class="row">
                        
                        <!-- First Row -->
                        <div class="mt-4 col-2 text-end">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0"><i class="fa-solid fa-user me-2"></i>Name: </p>
                        </div>
                        
                        <div class="mt-4 col-5">
                            <p class="roboto text-dark weight-600 fs-sm pt-0 mt-0">{{ $patient->last_name }}, {{ $patient->first_name }} {{ $patient->middle_initial }}</p>
                        </div>
                        
                        <div class="mt-4 col-1 text-end">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Age: </p>
                        </div>
                        
                        <div class="mt-4 col-1">
                            <p class="roboto text-dark weight-600 fs-sm pt-0 mt-0">{{ $patient->age }}</p>
                        </div>
                        
                        <div class="mt-4 col-1 text-end">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0">Sex: </p>
                        </div>
                        
                        <div class="mt-4 col-2">
                            <p class="roboto text-dark weight-600 fs-sm pt-0 mt-0">{{ $patient->sex }}</p>
                        </div>

                        <!-- Second Row Table -->
                        <div class="col-12 mt-3">
                            <div class="logbook w-100 pb-4">
                                <table>
                                    <tr class="py-0 my-0 text-center bg-success">
                                        <th width="10%"><p class="text-dark roboto weight-600 m-1 p-0">DATE</p></th>
                                        <th width="7%"><p class="text-dark roboto weight-600 m-1 p-0">TOOTH NO./S</p></th>
                                        <th width="15%"><p class="text-dark roboto weight-600 m-1 p-0">PROCEDURE</p></th>
                                        <th width="15%"><p class="text-dark roboto weight-600 m-1 p-0">DENTIST/S</p></th>
                                        <th width="7%"><p class="text-dark roboto weight-600 m-1 p-0">AMOUNT CHARGE</p></th>
                                        <th width="7%"><p class="text-dark roboto weight-600 m-1 p-0">AMOUNT PAID</p></th>
                                        <th width="7%"><p class="text-dark roboto weight-600 m-1 p-0">BALANCE</p></th>
                                        <th><p class="text-dark roboto weight-600 m-1 p-0">NEXT APPOINTMENT</p></th>
                                        <th><p class="text-dark roboto weight-600 m-1 p-0">EDIT</p></th>
                                    </tr>

                                    @foreach ($patient->appointments as $appointment)
                                    
                                    <tr class="py-0 my-0 text-start {{ $appointment->done ? 'bg-warning' : '' }}">
                                        <td class="py-2" width="10%"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ $appointment->created_at->format('m-d-Y') }}</p></td>
                                        <td class="py-2" width="7%"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ $appointment->tooth_no }}</p></td>
                                        <td class="py-2"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ $appointment->procedure }}</p></td>
                                        <td class="py-2" width="15%"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">
                                            {{ $patient->medical_history()->physician }}
                                        </p></td>
                                        <td class="py-2" width="7%"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">&#8369;{{ $appointment->charge }}</p></td>
                                        <td class="py-2" width="7%"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">&#8369;{{ $appointment->paid }}</p></td>
                                        <td class="py-2" width="7%"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">&#8369;{{ $appointment->charge - $appointment->paid }}</p></td>
                                        <td class="py-2" width="20%"><p class="text-dark roboto fs-sm weight-500 m-1 p-0">{{ $check->date($appointment->appointment) }}<br>
                                                {{ $check->time($appointment->start_time) }}-
                                                {{ $check->time($appointment->end_time) }}</p></td>
                                                
                                        <td class="text-end py-2 pe-2" width="20%">

                                            @unless ($appointment->done)

                                            <!-- EDIT -->
                                            <button
                                            data-src="{{ route('appointment.editIndex', [
                                                'id' => $patient->id,
                                                'appointment_id' => $appointment->id
                                            ]) }}"
                                            data-title="Edit Appointment Information"
                                            data-paragraph="Do you want to Edit {{ $appointment->patient->nickname }}'s appointment information?"
                                            data-color="bg-warning"
                                            data-btn="Edit"   
                                            data-target="GET"
                                            class="modal-trigger btn btn-warning hover-to-dark text-light rounded px-2 py-1"><i class="fa-solid fa-pen-to-square"></i></button>
                                                
                                            @endunless
                                            
                                            <!-- DELETE -->
                                            <button
                                            data-src="{{ route('appointment.destroy', $appointment->id) }}"
                                            data-title="Delete Appointment Information"
                                            data-paragraph="Do you want to delete {{ $appointment->patient->nickname }}'s appointment information?"
                                            data-color="bg-danger"
                                            data-btn="Delete"  
                                            data-target="POST" 
                                            class="modal-trigger btn btn-danger hover-to-dark text-light rounded px-2 py-1"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    @endforeach
                                    
                                </table>
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