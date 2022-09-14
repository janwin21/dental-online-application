@extends('layouts.master')

<!-- DASHBOARD WITH NO DATA -->
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
        'resources/js/pages/calendar-form.js'
    ])
    
</head>
<body>

    @section('page-content')

        <!-- Main Content -->
        <div class="col-7 p-4">

            <!-- Content Information -->
            <div class="content-information">

                <div class="section-title bg-success rounded-top px-4 py-2">
                    <h6 class="roboto text-light-gray weight-600 m-0 p-0"><i class="fa-solid fa-calendar me-2"></i></i>Calendar</h6>
                </div>

                <div class="section-title bg-light rounded-top px-4 py-2">
                    <div class="row">
                        
                        <!-- First Row -->
                        <div class="col-8 mt-5 mb-3">
                            <p class="roboto text-grayish weight-600 fs-sm pt-0 mt-0 date-p">Month DD, YYYY</p>
                        </div>

                        <div class="col-1 mt-5 mb-3 text-end">
                            <button class="year-btn btn btn-light shadow rounded" data-value="-1">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>

                        <div class="year-display col-2 mt-5 mb-3 px-0 text-end text-center">
                            <h2 class="roboto weight-600 text-secondary d-inline">2002</h2>
                        </div>

                        <div class="col-1 mt-5 mb-3 text-end">
                            <button class="year-btn btn btn-light shadow rounded" data-value="1">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>

                        <div class="calendar col-12 mb-5 mt-3">
                            <table class="w-100">
                                <!--
                                <tr>
                                    <th class="text-center"><p class="text-success roboto">SUN</p></th>
                                    <th class="text-center"><p class="text-success roboto">MON</p></th>
                                    <th class="text-center"><p class="text-success roboto">TUE</p></th>
                                    <th class="text-center"><p class="text-success roboto">WED</p></th>
                                    <th class="text-center"><p class="text-success roboto">THU</p></th>
                                    <th class="text-center"><p class="text-success roboto">FRI</p></th>
                                    <th class="text-center"><p class="text-success roboto">SAT</p></th>
                                </tr>
                                
                                <tr>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a>
                                    </td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                    <td class="text-center"><a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">00</a></td>
                                </tr>
                                -->
                            </table>
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
        
        const appointmentSettings = [
            {
                route: 1,
                name: 'last_name, first_name, mi. 1',
                done: true,
                color: 'blue',
                date: '2022-09-09',
                startTime: '10:50 AM',
                endTime: '1:30 PM'
            },
            {
                route: 2,
                name: 'last_name, first_name, mi. 2',
                done: false,
                color: 'indigo',
                date: '2022-09-09',
                startTime: '2:00 PM',
                endTime: '3:00 PM'
            },
            {
                route: 3,
                name: 'last_name, first_name, mi. 3',
                done: false,
                color: 'yellow',
                date: '2022-09-09',
                startTime: '4:00 PM',
                endTime: '6:00 PM'
            },
            {
                route: 4,
                name: 'last_name, first_name, mi. 4',
                done: true,
                color: 'indigo',
                date: '2022-09-11',
                startTime: '2:00 PM',
                endTime: '3:00 PM'
            },
            {
                route: 5,
                name: 'last_name, first_name, mi. 5',
                done: false,
                color: 'yellow',
                date: '2022-09-13',
                startTime: '4:00 PM',
                endTime: '6:00 PM'
            }
        ]

    </script>
</body>
</html>