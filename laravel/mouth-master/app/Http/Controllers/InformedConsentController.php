<?php

namespace App\Http\Controllers;

use App\Models\InformedConsent;
use App\Models\Patient;
use Illuminate\Http\Request;

class InformedConsentController extends Controller
{
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
        InformedConsent::create([
            'patient_id' => $request->patient_id,
            'agree' => $request->agree
        ]);
        
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

        return view('forms.informed-consent', [
            'patient' => Patient::where('id', $id)->first()
        ]);
    }

    public function editWithPatient($patient_id) // THIS WILL BECOME A MEAN FOR CREATE W/ PATIENT!!!
    {
        return view('forms.informed-consent', [
            'patient' => Patient::where('id', $patient_id)->first()
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
        //dd($request->agree);
        $consent = InformedConsent::where('id', $id)->first();
        $consent->patient_id = $request->patient_id;
        $consent->agree = $request->agree;
        $consent->update();
        
        return redirect(route('patient.show', $request->patient_id));
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
