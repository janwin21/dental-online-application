@php
    $current_route = Route::current()->getName();
@endphp

@unless ($current_route == 'patient.index' || $current_route == 'page.logbook')
    
    <!-- Section -->
    <div class="section col-3 {{ ($current_route == 'login' || $current_route == 'register') ?  '' : 'bg-light' }} py-4 sticky-top">
 
        <div class="wrapper">

            @unless ($current_route == 'login' || $current_route == 'register')

            @if ($current_route == 'form.intraoral')

            <!-- Intraoral Editor Section -->
            <div class="card-content text-center border border-light bg-light rounded px-2 py-4">
                <object data="../svg/intraoral.svg"></object>
                <h5 class="roboto my-3">Intraoral Examination</h5>
                <p class="roboto weight-100 fs-xs">Examine the structure of patient's teeth.</p>
            </div>

            <!-- Navigations -->
            <div class="duty navigation-section mt-2">

                <!-- Condition Lists -->
                <p class="roboto ms-2 fs-xs weight-600 text-grayish">Condition</p>
                <div class="row px-2"></div>
                
                <!-- Restorations & Prosthetics List -->
                <p class="roboto ms-2 mt-5 fs-xs weight-600 text-grayish">Restorations & Prosthetics</p>
                <div class="row px-2"></div>
                
                <!-- Surgery List -->
                <p class="roboto ms-2 mt-5 fs-xs weight-600 text-grayish">Surgery</p>
                <div class="row px-2"></div>

            </div>

            @elseif ($current_route == 'page.calendar')

            <!-- X-ray Section -->
            <div class="card-content text-center border border-light bg-light rounded px-2 py-4">
                <object data="../svg/appointment.svg"></object>
                <h5 class="roboto my-3">Appointment</h5>
                <p class="roboto weight-100 fs-xs">Patients who have an appointment from the selected date will apper here.</p>
            </div>

            <!-- Navigations -->
            <div class="duty navigation-section appointment mt-3">

                <!-- Appointed User Lists -->
                <p class="roboto ms-2 fs-xs weight-600 text-grayish">Appointed Patients</p>

                <!-- Empty Appointed Items -->
                <div class="btn bg-light-grayish w-100 text-start shadow-none my-2 hover-to-grayish" href="#">
                    <div class="row m-0 px-2 py-3">
                        <p class="col-10 m-0 p-0 roboto text-wrap fs-sm"><i class="fa-solid fa-hourglass me-3"></i>No Appointment Available</p>
                    </div>
                </div>

            </div>
        
            @else

            <!-- X-ray Section -->
            <div class="card-content text-center border border-light bg-light rounded hover-to-grayish px-2 py-4">
                <object data="{{ asset('svg/x-ray.svg') }}"></object>
                <h5 class="roboto my-3">X-ray</h5>
                <p class="roboto weight-100 fs-xs">Examine the structure of your teeth for precise consultation.</p>
                <a href="#"
                data-src="{{ route('form.xray') }}"
                data-title="Add X-Ray Examination"
                data-paragraph="You previous examination are cannot be updated. Do you want to add new examination for your new update?"
                data-color="bg-success"
                data-btn="Add"    
                class="modal-trigger btn btn-success px-5 py-1 rounded-pill roboto text-light weight-500 hover-to-dark fs-xs shadow-none">Add</a>
            </div>

            <!-- Navigations -->
            <div class="duty navigation-section mt-3">

                <!-- User Lists -->
                <p class="roboto ms-2 fs-xs weight-600 text-grayish">Dentist on Duty</p>

                @if (isset($users))
                @foreach ($users as $user)
                    <a class="btn btn-light w-100 text-start shadow-none my-2" href="#"><i class="fa-solid fa-user-tie me-2 text-dark fs-sm"></i>Dr. {{ $user->first_name }} {{ $user->middle_initial }} {{ $user->last_name }} </a>
                @endforeach
                @endif
                
                <!-- Personnel List 
                <p class="roboto ms-2 mt-4 fs-xs weight-600 text-grayish">Personnel on Duty</p>
                <a class="btn btn-light w-100 text-start shadow-none my-2" href="#"><i class="fa-solid fa-user-tie me-2 text-dark fs-sm"></i>personnel denstist name</a>
                <a class="btn btn-light w-100 text-start shadow-none my-2" href="#"><i class="fa-solid fa-user-tie me-2 text-dark fs-sm"></i>personnel denstist name</a>
                <a class="btn btn-light w-100 text-start shadow-none my-2" href="#"><i class="fa-solid fa-user-tie me-2 text-dark fs-sm"></i>personnel denstist name</a>
                <a class="btn btn-light w-100 text-start shadow-none my-2" href="#"><i class="fa-solid fa-user-tie me-2 text-dark fs-sm"></i>personnel denstist name</a>-->

            </div>
        
            @endif

            @endunless

        </div>

    </div>
    
@endunless

</div>
</div>