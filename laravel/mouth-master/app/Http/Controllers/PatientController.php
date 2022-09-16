<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\CheckUtility;
use App\Models\Intraorals;
use App\Models\MedicalHistories;
use App\Models\Patient;
use App\Models\Xrays;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    function __construct() { $this->middleware('auth'); }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.patient', ['patients' => Patient::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.main-information-form');
    }

    public function createIndex($id)
    {
        if($id == -1) return redirect(route('patient.create'));

        return view('forms.main-information-form', [
            'patient' => Patient::where('id', $id)->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $request->validated();

        $patient = Patient::create([
            'dentist_id' => $request->dentist_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_initial' => $request->middle_initial,
            'birth_date' => $request->birth_date,
            'sex' => $request->sex,
            'age' => $request->age,
            'religion' => $request->religion,
            'nationality' => $request->nationality,
            'nickname' => $request->nickname,
            'home_no' => $request->home_no,
            'home_address' => $request->home_address,
            'occupation' => $request->occupation,
            'office_no' => $request->office_no,
            'dental_insurance' => $request->dental_insurance,
            'effective_date' => $request->effective_date,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'refferer' => $request->refferer,
            'reason' => $request->reason,
            'guardian_name' => $request->guardian_name,
            'guardian_occupation' => $request->guardian_occupation
        ]);

        return redirect(route('patient.show', $patient->id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::where('id', $id)->first();

        return view('pages.dashboard', [
            'check' => new CheckUtility(),
            'patient' => $patient
        ]);
    }

    // SHOW ALL DATA FROM PATIENT TABLE
    public function showAll($id) 
    {
        return view('pages.patient', [
            'patient' => Patient::where('id', $id)->first(),
            'patients' => Patient::get()
        ]);
    }

    // SHOW ALL DATA WITH ALL OTHER TABLE RELATIONSHIPS FROM HISTORY PAGES
    public function showAllWith($id) 
    {
        if($id == -1) return redirect(route('patient.index'));

        return view('pages.history-storage', [
            'patient' => Patient::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('forms.main-information-form', [
            'check' => new CheckUtility,
            'patient' => Patient::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::where('id', $id)->first();
        $patient->dentist_id = $request->dentist_id;
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->middle_initial = $request->middle_initial;
        $patient->birth_date = $request->birth_date;
        $patient->sex = $request->sex;
        $patient->age = $request->age;
        $patient->religion = $request->religion;
        $patient->nationality = $request->nationality;
        $patient->nickname = $request->nickname;
        $patient->home_no = $request->home_no;
        $patient->home_address = $request->home_address;
        $patient->occupation = $request->occupation;
        $patient->office_no = $request->office_no;
        $patient->dental_insurance = $request->dental_insurance;
        $patient->effective_date = $request->effective_date;
        $patient->phone_no = $request->phone_no;
        $patient->email = $request->email;
        $patient->refferer = $request->refferer;
        $patient->reason = $request->reason;
        $patient->guardian_name = $request->guardian_name;
        $patient->guardian_occupation = $request->guardian_occupation;
        $patient->update();
        
        return redirect(route('patient.show', $patient->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::where('id', $id)->first()->delete();
        return redirect(route('patient.index'));
    }
}
