@extends('layouts.master')

<!-- MAIN INFORMATION FORM -->
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
        <div class="col-7 p-4">

            <!-- Content Information -->
            <div class="form-information content-information">

                <div class="section-title bg-success rounded-top px-4 py-4 text-center">
                    <h5 class="roboto text-light-gray weight-600 m-0 mt-3 p-0">Dental Clinic Form</h5>
                    <p class="roboto text-light-gray weight-500">Mouth Master - Dental Clinic</p>
                </div>

                <form action="{{ route('consent.store') }}" method="POST">
                    @csrf

                    <input class="d-none" required value="{{ $patient->id }}" type="text" name="patient_id">

                <div class="section-body bg-light p-5">
                    <div class="row">
                        
                    <h3 class="roboto text-center text-grayish mb-5">
                        <u>INFORMED CONSENT</u>
                    </h3>

                    <p class="roboto text-wrap text-justify mb-5">
                    <strong><u>TREATMENT TO BE DONE:</u></strong> I understand
                    and consent to have any treatment done by the dentist after
                    the procedure, the risks & benefits & cost have been fully
                    explained. These treatments include, but are not limited to,
                    X-rays, cleanings, periodontal treatments, fillings, crowns,
                    bridges, all types of extraction, root canals,&/or dentures
                    ,local anesthetics & surgical cases.
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>DRUGS & MEDICATIONS: </strong></u> I understand
                    that antibiotics, analgesics & other medications can cause
                    allergic reactions like redness & swelling of tissues, pain,
                    itching, vomiting,&/or anaphylactic shock.
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>CHANGES IN TREATMENT PLAN:</strong></u> I
                    understand that during treatment it may be necessary to
                    change/ add procedures because of conditions found while
                    working on the teeth that was not discovered during
                    examination. For example, root canal therapy may be needed
                    following routine restorative procedures. I give my
                    permission to the dentist to make any ‘all changes and
                    additions as necessary w/ my responsibility to pay all the
                    costs agreed.
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>RADIOGRAPH: </strong></u>I understand that an
                    x-ray shot or a radiograph may be necessary as part of
                    diagnostic aid to come up with tentative diagnosis of my
                    Dental problem and to make a good treatment plan, but this
                    will not give me a 100% assurance for the accuracy of the
                    treatment since all dental treatments are subject to
                    unpredictable complications that later on may lead to sudden
                    change of treatment plan and subject to new charges,
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>REMOVAL OF TEETH: </strong></u>I’ll understand
                    that alternatives to tooth removal root canal therapy.
                    Crowns & periodontal surgery, etc.) & I completely
                    understand these alternatives, including their risk &
                    benefits prior to authorizing the dentist to remove teeth &
                    any other structures necessary for reasons above. I
                    understand that removing teeth does not always remove all
                    the infections, if present, & it may be necessary to have
                    further treatment. I understand the risk involved in having
                    teeth removed, such as pain, swelling, spread of infection,
                    dry socket, fractured jaw, loss of feeling on the teeth,
                    lips, tongue & surrounding tissue that can last for an
                    indefinite period of time. I understand that I may need
                    further treatment under a specialist if complications arise
                    during or following treatment.
                    </p>
    
                    <p class="form-transformation roboto text-wrap text-justify mb-5">
                    <u><strong>CROWNS (CAPS) & BRIDGES:</strong></u
                    >Preparing a tooth may irritate the nerve tissue in the
                    center of the tooth, leaving the tooth extra sensitive to
                    heat, cold & pressure. Treating such irritation may involve
                    using special toothpastes, mouth rinses or root canal
                    therapy. I understand that sometimes it is not possible to
                    match the color of natural teeth exactly with artificial
                    teeth. I further understand that may be wearing temporary
                    crowns, which may come off easily & that I must be careful
                    to ensure that they are kept on until the permanent crowns
                    are delivered. It is my responsibility to return for
                    permanent cementation within 20 days from tooth preparation,
                    as excessive days delay may allow for tooth movement, which
                    may necessitate a remake of the crown, bridge/cap. I
                    understand there will be additional charges for remakes due
                    to my delaying of permanent cementation, & I realize that
                    final opportunity to make changes in my new crown, bridges
                    or cap (including shape, fit, size, & color) will be before
                    permanent cementation.
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>ENDODONTICS (ROOT CANAL): </strong></u>l
                    understand there is no guarantee that a root canal treatment
                    will save a tooth & that complications can occur from the
                    treatment & that occasionally root canal filling materials
                    may extend through the tooth which does not necessarily
                    effect the success of the treatment. Understand that
                    endodontic files & drills are very fine instruments &
                    stresses vented in their manufacture & calcifications
                    present in teeth can cause them to break during use. I
                    understand that referral to the endodontist for additional
                    treatments may be necessary following any root canal
                    treatment & I agree that I am responsible for any additional
                    cost for treatment performed by the endodontist. I
                    understand that a tooth may require removal despite all
                    efforts to save it.
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>PERIODONTAL DISEASE: </strong></u>I understand
                    that periodontal disease is a serious condition causing gum
                    & bone inflammation &/or loss & that can lead eventually to
                    the loss of my teeth. I understand the alternative treatment
                    plans to correct periodontal disease, including gum surgery
                    tooth extractions with or without replacement. I understand
                    that undertaking any dental procedures may have future
                    adverse effect on my periodontal Conditions.
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>FILLINGS: </strong></u>understand that care must
                    be exercised in chewing on fillings, especially during the
                    first 24 hours to avoid breakage. I understand that a more
                    extensive filling or a crown may be required, as additional
                    decay or fracture may become evident after initial
                    excavation. I understand that significant sensitivity is a
                    common, but usually temporary, after-effect of a newly
                    placed filling. I further understand that filling a tooth
                    may irritate the nerve tissue Creating sensitivity &
                    treating such sensitivity could require root canal therapy
                    or extractions.
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>DENTURES: </strong></u>understand that wearing of
                    dentures can be difficult. Sore spots altered speech &
                    difficulty in eating are common problems. Immediate dentures
                    (placement of denture immediately after extractions) may be
                    painful. Immediate dentures may require considerable
                    adjusting & several relines. Understand that it is my
                    responsibility to return for delivery of dentures, I
                    understand that failure to keep my delivery appointment may
                    result in poorly fitted dentures. If a remake is required
                    due to my delays of more than 30 days, there will be
                    additional charges. A permanent reline will be needed later,
                    which is not included in the initial fee. I understand that
                    all adjustment or alterations of any kind after this initial
                    period is subject to charges.
                    </p>
    
                    <p class="roboto text-wrap text-justify mb-5">
                    <u><strong>
                        I understand that dentistry is not an exact science and
                        that no dentist can properly guarantee accurate results
                        all the time,
                    </strong></u>
                    I hereby authorize any of the doctors/dental auxiliaries to
                    proceed with & perform the dental restorations & treatments
                    as explained to me. I understand that these are subject to
                    modification depending on undiagnosable circumstances that
                    may arise during treatment. I understand that regardless of
                    any dental insurance coverage I may have, I am responsible
                    for payment of dental fees, I agree to pay any attorney's
                    fees, collection fee, or court costs that may be incurred to
                    satisfy any obligation to this office. All treatment were
                    properly explained to me & any untoward circumstances that
                    may arise during the procedure, the attending dentist will
                    not be held liable since it is my free will, with full trust
                    & confidence in him/her, to undergo dental.
                    </p>

                    <!-- INFORMED CONSENT CHECKBOX -->
                    <div class="roboto form-check text-center">
                        <input type="checkbox" value="agree" id="flexCheckDefault" name="agree">
                        <label class="ms-2 form-check-label" for="flexCheckDefault">
                            I agree and understand the terms and conditions stated in the  informed consent.
                        </label>
                    </div>

                    </div>
                </div>

                <div class="section-body bg-light p-5 pt-4">
                    <div class="row">

                        <p class="text-grayish roboto weight-600 fs-xs date-p">Month DD, YYYY</p>

                        <!-- Ninth Row -->
                        <div class="col-12 mt-0 d-flex flex-column text-end">
                            <div class="text-end">
                                <button class="w-25 btn btn-success text-light hover-to-dark px-4 py-1">Confirm</button>
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
                <button type="button" class="btn cancel-btn btn-secondary px-4 py-1 shadow-none hover-to-dark" data-bs-dismiss="modal">Cancel</button>
                <form action="#" method="POST">
                    <button type="submit" class="btn btn-danger ms-2 px-4 py-1 shadow-none hover-to-dark border-light">Delete</button>
                </form>
            </div>
            </div>
        </div>
    </div>

</body>
</html>