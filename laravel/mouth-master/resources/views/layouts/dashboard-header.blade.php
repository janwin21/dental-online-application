{{-- Header --}}
<!-- Header User Information -->

@if (isset($patient))

<div class="col-7 ps-0 pe-4 py-4">
    <h5 class="pb-0 mb-0 text-dark">{{ $patient->last_name }}, {{ $patient->first_name }}, {{ $patient->middle_initial }}</h5>
    <p class="text-light-gray weight-500 pt-0 mt-0">Patient ID#{{ $patient->id }}</p>
    <p class="fs-sm weight-400 roboto reason">{{ $patient->reason }}</p>

@else

<div class="col-10 ps-0 pe-4 py-4">
    <h5 class="pb-0 mb-0 text-dark">No Information Acquired</h5>

@endif

    <div class="header-icons mt-4 pt-2">
        <div class="row">

            <div class="header-left col-6 text-start">
                <button class="btn border-0 outlined-hover-to-grayish m-0 p-0">
                    <h4 class="m-0 p-0"><i class="fa-solid fa-circle-left"></i></h4>
                </button>
                <button class="btn border-0 outlined-hover-to-grayish m-0 p-0">
                    <h4 class="m-0 p-0"><i class="fa-solid fa-circle-right"></i></h4>
                </button>
            </div>
            
            <div class="header-right col-6 text-end">
                <button
                data-src="{{ route('patient.create') }}"
                data-title="Add Patients"
                data-paragraph="Do you want to add more patients?"
                data-color="bg-success"
                data-btn="Add"    
                class="modal-trigger btn border-0 outlined-hover-to-grayish m-0 ms-2 p-0">
                    <h4 class="m-0 p-0"><i class="fa-solid fa-hospital-user"></i></h4>
                </button>
                <button
                data-src="SRC_URL"
                data-title="Update { nickname }"
                data-paragraph="Do you want to update { nickname }'s patient information?"
                data-color="bg-warning"
                data-btn="Update"    
                class="modal-trigger btn border-0 outlined-hover-to-grayish m-0 ms-2 p-0">
                    <h4 class="m-0 p-0"><i class="fa-solid fa-file-pen"></i></h4>
                </button>
                <button
                data-src="SRC_URL"
                data-title="Delete Patient"
                data-paragraph="Do you want to delete { nickname }'s patient information?"
                data-color="bg-danger"
                data-btn="Delete"    
                class="modal-trigger btn border-0 outlined-hover-to-grayish m-0 ms-1 p-0">
                    <h4 class="m-0 p-0"><i class="fa-solid fa-trash"></i></h4>
                </button>
                <a href="{{ route('page.calendar') }}" class="btn border-0 outlined-hover-to-grayish m-0 ms-2 p-0">
                    <h4 class="m-0 p-0"><i class="fa-regular fa-calendar-xmark"></i></h4>
                </a>
            </div>

        </div>
    </div>
</div>

@if (isset($patient))

<!-- Header User Section -->
<div class="header-section col-3 py-4 border-start border-2 ps-4">
    <h1 class="fs-xl anton text-light-gray float-start">{{ $patient->age }}</h1>
    <p class="text-light-gray weight-500 pt-2 ps-2 mt-0 float-start">Age</p>
    <div class="w-100 float-start">
        <h5 class="weight-600 pb-0 mb-0 roboto">{{ $patient->nickname }}</h5>
        <p class="text-light-gray weight-500 pt-0 mt-0 fs-sm">Nickname<i class="ms-2 fa-solid fa-children"></i></p>
    </div>
</div>

@endif

