{{-- REGISTER --}}
@extends('layouts.master')

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
        'resources/js/pages/form.js'
    ])
    
</head>
<body>

    @section('page-content')
    
        <!-- Main Content -->
        <div class="col-6 p-4">

            <!-- Content Information -->
            <div class="content-information mt-4">

                <div class="section-title bg-success rounded-top px-4 py-4 text-center">
                    <h5 class="roboto text-light-gray weight-600 m-0 mt-3 p-0">Dental Clinic Register</h5>
                    <p class="roboto text-light-gray weight-500">Mouth Master - Dental Clinic</p>
                </div>
                
                <form action="#" method="POST">

                <div class="section-body auth-bg-light p-5">
                    <div class="row">

                        @if ($errors->any())

                        <!-- Error Row -->
                        <div class="col-12 my-5">
                            @foreach ($errors->all() as $error)
                            <p class="roboto weight-500 mb-0 pb-0 ps-1 fs-sm text-danger"><strong>{{ $error }}</strong></p>    
                            @endforeach
                        </div>
                        @endif

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
                        <div class="col-12 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="email">Email <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="email" name="email">
                        </div>

                        <!-- Third Row -->
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="password">Password <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="password" name="password">
                        </div>
                        
                        <div class="col-6 mt-4 mb-3">
                            <label class="d-block roboto weight-500 mb-0 pb-0 ps-1" for="password_confirmation">Confirm Password <strong class="text-danger ms-1">*</strong></label>
                            <input required class="w-100 border border-secondary rounded px-3 py-1 mt-2" type="password" name="password_confirmation">
                        </div>

                    </div>
                </div>

                <div class="section-body auth-bg-light p-5 pt-4 border-top border-1 border-secondary">
                    <div class="row">

                        <p class="text-grayish roboto weight-600 fs-xs date-p">Month DD, YYYY</p>

                        <!-- Last Row -->
                        <div class="col-12 mt-0 d-flex flex-column text-end">
                            <div class="text-end">
                                <a href="{{ route('login') }}" class="w-25 btn btn-danger text-light hover-to-dark px-4 py-1">Cancel</a>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                
                                    <button type="submit" class="w-25 btn btn-success text-light hover-to-dark px-4 py-1">Confirm</button>

                                </form>
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

    <!--
    <div class="apply-wave container-fluid w-100 m-0 p-0"><object data="../svg/wave.svg"></object></div>
    -->

</body>
</html>

{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
