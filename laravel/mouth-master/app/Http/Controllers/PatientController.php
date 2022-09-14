<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
    
        $request->validated();

        Patient::create([
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
            'dental_insurance' => $request->dental_insurance,
            'effective_date' => $request->effective_date,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'refferer' => $request->refferer,
            'reason' => $request->reason,
            'guardian_name' => $request->guardian_name,
            'guardian_occupation' => $request->guardian_occupation
        ]);

        return redirect(route('patient.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('forms.main-information-form');
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
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect(route('patient.index'));
    }
}
