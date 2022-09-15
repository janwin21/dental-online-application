<?php

namespace App\Http\Controllers;

use App\Models\CheckUtility;
use App\Models\MedicalHistories;
use App\Models\Patient;
use Illuminate\Http\Request;

class MedicalHistoriesController extends Controller
{

    private $allergy_size = 5;
    private $illness_size = 35;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $check = new CheckUtility();

        $allergies = $check->to_array($request, $this->allergy_size, 'allergy');
        $illnesses = $check->to_array($request, $this->illness_size, 'illness');
        
        $medical_histories = new MedicalHistories();
        $medical_histories->patient_id = $request->patient_id;
        $medical_histories->previous_dentist = $request->previous_dentist;
        $medical_histories->last_dental_visit = $request->last_dental_visit;
        $medical_histories->physician = $request->physician;
        $medical_histories->specialty = $request->specialty;
        $medical_histories->office_address = $request->office_address;
        $medical_histories->office_no = $request->office_no;
        $medical_histories->q1 = $request->q1;
        $medical_histories->q2 = $request->q2;
        $medical_histories->q2_text = $request->q2_text;
        $medical_histories->q3 = $request->q3;
        $medical_histories->q3_text = $request->q3_text;
        $medical_histories->q4 = $request->q4;
        $medical_histories->q4_text = $request->q4_text;
        $medical_histories->q5 = $request->q5;
        $medical_histories->q5_text = $request->q5_text;
        $medical_histories->q6 = $request->q6;
        $medical_histories->q7 = $request->q7;
        $medical_histories->allergies = $check->toString($allergies);
        $medical_histories->bleeding_time = $request->bleeding_time;
        $medical_histories->blood_type = $request->blood_type;
        $medical_histories->blood_pressure = $request->blood_pressure;
        $medical_histories->women_q1 = $request->women_q1;
        $medical_histories->women_q2 = $request->women_q2;
        $medical_histories->women_q3 = $request->women_q3;
        $medical_histories->illnesses = $check->toString($illnesses);
        $medical_histories->save();

        return redirect(route('patient.show', $request->patient_id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // THIS WILL BECOME A MEAN FOR CREATE!!!
    {
        if($id == -1) return redirect(route('patient.index'));

        return view('forms.medical-history-form', [
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
