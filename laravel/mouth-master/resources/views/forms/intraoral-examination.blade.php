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
        'resources/js/pages/intraoral-form.js', 'resources/js/pages/form.js'
    ])
    
</head>
<body>

    @section('page-content')
    
        <!-- Main Content -->
        <div class="col-7 p-4">

            <!-- Content Information -->
            <div class="content-information">

                <div class="section-title bg-success rounded-top px-4 py-2 text-center">
                    <h5 class="roboto text-light-gray weight-600 m-0 mt-3 p-0">Dental Chart</h5>
                    <p class="roboto text-light-gray weight-500">Mouth Master - Dental Clinic</p>
                </div>

                <form action="{{ route('intraoral.store') }}" method="POST">
                    @csrf

                    <input required class="d-none" type="number" name="patient_id" value="{{ $id }}">
 
                <div class="section-body rounded-top bg-light p-5 pt-4">
                    <div class="row">

                        <div class="intraoral col-12">
                            <table class="w-100"></table>
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
                    { type: 'open', no: '55', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '54', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'close', no: '53', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '52', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '51', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '61', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '62', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '63', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'open', no: '64', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '65', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' }
                ]
            },
            // second row
            {
                isReversed: false,
                data: [
                    { type: 'open', no: '18', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '17', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '16', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '15', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '14', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'close', no: '13', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '12', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '11', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '21', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '22', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '23', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'open', no: '24', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '25', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '26', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '27', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '28', route: '{{ asset('images/intraoral/intraoral-open.png') }}' }
                ]
            },
            // first row
            {
                isReversed: true,
                data: [
                    { type: 'open', no: '48', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '47', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '46', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '45', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '44', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'close', no: '43', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '42', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '41', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '31', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '32', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '33', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'open', no: '34', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '35', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '36', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '37', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '38', route: '{{ asset('images/intraoral/intraoral-open.png') }}' }
                ]
            },
            // second row
            {
                isReversed: false,
                data: [
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'open', no: '85', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '84', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'close', no: '83', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '82', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '81', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '71', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '72', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'close', no: '73', route: '{{ asset('images/intraoral/intraoral-close.png') }}' },
                    { type: 'open', no: '74', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'open', no: '75', route: '{{ asset('images/intraoral/intraoral-open.png') }}' },
                    { type: 'empty' },
                    { type: 'empty' },
                    { type: 'empty' }
                ]
            }
        ];

        const legendSettings = {
            conditions: [
                { acronym: '&nbsp;', name: 'Present Teeth' },
                { acronym: 'D', name: 'Decayed' },
                { acronym: 'M', name: 'Missing due to caries' },
                { acronym: 'MO', name: 'Missing due to other causes' },
                { acronym: 'Im', name: 'Impacted Tooth' },
                { acronym: 'Sp', name: 'Supernumerary Tooth' },
                { acronym: 'Rf', name: 'Root Fragment' },
                { acronym: 'Un', name: 'Unerupted' }
            ],
            restorations: [
                { acronym: 'Am', name: 'Amalgam Filling' },
                { acronym: 'Co', name: 'Composite Filling' },
                { acronym: 'JC', name: 'Jacket crown' },
                { acronym: 'Ab', name: 'Abutment' },
                { acronym: 'Att', name: 'Attachment' },
                { acronym: 'P', name: 'Pontic' },
                { acronym: 'In', name: 'Inlay' },
                { acronym: 'Imp', name: 'Implant' },
                { acronym: 'S', name: 'Sealants' },
                { acronym: 'Rm', name: 'Removable Denture' }
            ],
            surgeries: [
                { acronym: 'X', name: 'Extraction due to Caries' },
                { acronym: 'Xo', name: 'Extraction due to other causes' }
            ]
        };
    </script>

</body>
</html>