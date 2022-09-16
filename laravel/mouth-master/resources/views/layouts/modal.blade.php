{{-- Modal Section --}}
<div class="modal-section fade modal-dialog-centered text-center">
    <div class="modal-dialog w-25 rounded-top">
        <div class="modal-content bg-light rounded-top">
        <div class="modal-header-box bg-danger text-center py-3 rounded-top">
            <h5 class="modal-title d-block text-light" id="exampleModalLabel">notificationMessage</h5>
            <p class="d-block p-0 m-0 fs-sm text-light">Mouth Masters - Dental Clinic</p>
            <button class="btn btn-danger close-btn shadow-none border border-none border-0"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-body p-3">
            <p class="modal-paragraph fs-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="modal-footer p-2">
            <a href="" class="btn cancel-btn btn-secondary px-4 py-1 shadow-none hover-to-dark" data-bs-dismiss="modal">Cancel</a>

            {{-- dd(Route::current()->getName()) --}}

            <form action="#" method="GET">
                @csrf

                <button type="submit" class="GET d-none btn btn-danger ms-2 px-4 py-1 shadow-none hover-to-dark border-light">Delete</button>

            </form>

            <form action="#" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="POST d-none btn btn-danger ms-2 px-4 py-1 shadow-none hover-to-dark border-light">Delete</button>

            </form>
        </div>
        </div>
    </div>
</div>