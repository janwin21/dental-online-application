@php
    $current_route = Route::current()->getName();
    $medical_history_route = route('medical-history.edit', isset($patient->id) ? $patient->id : -1);
    $patient_route = isset($id) ? route('patient.showAll', $id) : route('patient.index');
@endphp

<!-- Container Wrapper -->
<div class="container-wrapper container-fluid bg-light-gray">
    <div class="row">

        <!-- Sidebar -->
        <div class="sidebar col-{{ ($current_route == 'login' || $current_route == 'register') ? '3' : '2' }} 
        {{ ($current_route == 'login' || $current_route == 'register') ? '' : 'bg-light' }} py-4 sticky-top">

            @unless ($current_route == 'login' || $current_route == 'register')

            <div class="wrapper">

                @if ($current_route == 'intraoral.edit')

                <!-- Intraoral Acronyms Display -->
                <div class="card-content text-center bg-light border border-light rounded px-2 pt-4 pb-2">
                    <h1 class="intraoral-acronym anton">P</h1>
                    <h5 class="intraoral-name roboto my-3">Present</h5>
                    <p class="roboto weight-100 fs-xs">Display the information of hovered legends.</p>
                </div>
        
                @else

                <!-- Medical History Section -->
                <div class="card-content text-center bg-light border border-light rounded hover-to-grayish px-2 py-4">
                    <object data="{{ asset('svg/medical-history.svg') }}"></object>
                    <h5 class="roboto my-3">Medical History</h5>
                    <p class="roboto weight-100 fs-xs">A record of information about a your personal health.</p>
                    <a href="#"
                    data-src="{{ $medical_history_route }}"
                    data-title="Add Medical History"
                    data-paragraph="You previous history are cannot be updated. Do you want to add new history for your new update?"
                    data-color="bg-success"
                    data-btn="Add"    
                    class="modal-trigger btn btn-success px-5 py-1 rounded-pill roboto text-light weight-500 hover-to-dark fs-xs shadow-none">Add</a>
                </div>
    
                @endif

                @if ($current_route == 'page.calendar')

                <div class="duty border border-0 px-2 pt-0 pb-2 mt-3 text-start">
                    <p class="roboto ms-2 fs-xs weight-600 text-grayish">Months</p>
                    <a data-index="0" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-champagne-glasses me-2"></i>January</a>
                    <a data-index="1" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-heart me-2"></i>February</a>
                    <a data-index="2" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-venus me-2"></i>March</a>
                    <a data-index="3" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-hand-peace me-2"></i>April</a>
                    <a data-index="4" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-briefcase me-2"></i>May</a>
                    <a data-index="5" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-dove me-2"></i>June</a>
                    <a data-index="6" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-bowl-food me-2"></i>July</a>
                    <a data-index="7" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-mask me-2"></i>August</a>
                    <a data-index="8" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-people-roof me-2"></i>September</a>
                    <a data-index="9" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-brain me-2"></i>October</a>
                    <a data-index="10" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-locust me-2"></i>November</a>
                    <a data-index="11" class="month-btns btn btn-light w-100 text-start shadow-none my-2 weight-600" href="#"><i class="fa-solid fa-gift me-2"></i>December</a>
                </div>
                
                @else

                <div class="duty border border-0 px-2 pt-0 pb-2 mt-3 text-start">
                    <p class="roboto ms-2 fs-xs weight-600 text-grayish">Welcome to our Clinic</p>
                    <a class="btn btn-light w-100 text-start shadow-none my-2 weight-600" href="{{ route('form.appointment') }}"><i class="fa-solid fa-book me-2"></i>Appointment</a>
                    <a class="btn btn-light w-100 text-start shadow-none my-2 weight-600" href="{{ route('page.history') }}"><i class="fa-solid fa-notes-medical me-2"></i>History</a>
                    <a class="btn btn-light w-100 text-start shadow-none my-2 weight-600" href="{{ $patient_route }}"><i class="fa-solid fa-bed me-2"></i>Patients</a>
                </div>

                @endif

            </div>
                
            @endunless

        </div>