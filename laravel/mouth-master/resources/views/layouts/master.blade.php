@php
    $current_route = Route::current()->getName();
@endphp

{{-- navigationbar --}}
@include('layouts.navbar')

{{-- sidebar --}}
@include('layouts.sidebar')

{{-- page contents --}}
@yield('page-content')

{{-- section --}}
@include('layouts.section')

{{-- modal --}}
@unless ($current_route == 'login' || $current_route == 'register')
    @include('layouts.modal')
@endunless
