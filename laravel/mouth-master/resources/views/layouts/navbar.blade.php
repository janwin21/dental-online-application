@php
    $current_route = Route::current()->getName();
    $dashboard_route = isset($patient->id) ? route('patient.show', $patient->id) : route('page.dashboard');
    $intraoral_route = route('intraoral.edit', isset($patient->id) ? $patient->id : -1);
    $screening_route = route('screening.edit', isset($patient->id) ? $patient->id : -1);
    $appointment_route = route('appointment.show', isset($patient->id) ? $patient->id : -1);

    $consent_route;

    if(isset($patient->id)) {
        if($patient->informed_consent())
            $consent_route = route('consent.editWithPatient', $patient->id);
        else
            $consent_route = route('consent.edit', $patient->id);
    } else {
        $consent_route = route('consent.edit', -1);
    }
@endphp

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg bg-light px-4">
    
    <div class="container-fluid">

        <a class="navbar-brand text-success pacifico weight-500 me-4" href="{{ $dashboard_route }}">
            <i class="fa-solid fa-tooth me-2" width="30" height="24"></i>
            Mouth Masters
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
            <li class="nav-item ms-4 me-3">
                <a class="nav-link roboto fs-sm outlined-hover-to-success weight-500 text-grayish
                {{ ($current_route == 'page.dashboard') ? 'active' : '' }}
                " href="{{ $dashboard_route }}"><i class="fa-solid fa-table-columns me-2"></i>Dashboard</a>
            </li>

            <li class="nav-item me-3">
                <a class="nav-link roboto fs-sm outlined-hover-to-success weight-500 text-grayish
                {{ ($current_route == 'form.intraoral') ? 'active' : '' }}
                " href="{{ $intraoral_route }}"><i class="fa-solid fa-teeth me-2"></i>Intraoral</a>
            </li>

            <li class="nav-item me-3">
                <a class="nav-link roboto fs-sm outlined-hover-to-success weight-500 text-grayish
                {{ ($current_route == 'form.screening') ? 'active' : '' }}
                " href="{{ $screening_route }}"><i class="fa-solid fa-tablet me-2"></i>Screening</a>
            </li>

            <li class="nav-item me-3">
                <a class="nav-link roboto fs-sm outlined-hover-to-success weight-500 text-grayish
                {{ ($current_route == 'page.logbook') ? 'active' : '' }}
                " href="{{ $appointment_route }}"><i class="fa-solid fa-book me-2"></i>Logbook</a>
            </li>

            <li class="nav-item me-3">
                <a class="nav-link roboto fs-sm outlined-hover-to-success weight-500 text-grayish
                {{ ($current_route == 'form.informed-consent') ? 'active' : '' }}
                " href="{{ $consent_route }}"><i class="fa-solid fa-align-justify me-2"></i>Informed Consent</a>
            </li>

            </ul>  

            <div class="d-flex m-0 p-0 w-25 text-end">
                @if (!Auth::user())

                <div class="form-control form-control-sm bg-light border-0 m-0 p-0">
                    <a href="{{ route('login') }}" class="btn btn-success hover-to-dark text-light m-0 py-0 px-4 fs-sm" type="submit">Login</a>
                </div>

                @else

                <div class="form-control form-control-sm bg-light border-0 m-0 p-0">
                    <form class="" action="{{ route('logout') }}" method="POST">
                        @csrf
                            <button class="btn btn-dark text-light m-0 py-0 px-4 fs-sm" type="submit">Logout</button>
                    </form>
                </div>
                    
                @endif
            </div>

        </div>

    </div>

</nav>