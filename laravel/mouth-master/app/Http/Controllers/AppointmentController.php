<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\CheckUtility;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
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
        Appointment::create([
            'patient_id' => $request->patient_id,
            'tooth_no' => $request->tooth_no,
            'procedure' => $request->procedure,
            'charge' => $request->charge,
            'paid' => $request->paid,
            'appointment' => $request->appointment,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
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
        if($id == -1) return redirect(route('patient.index'));

        return view('pages.logbook', [
            'check' => new CheckUtility(),
            'patient' => Patient::where('id', $id)->first()
        ]);
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

        return view('forms.appointment-form', [
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
