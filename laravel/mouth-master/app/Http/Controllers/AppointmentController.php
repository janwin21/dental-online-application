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

    public function indexWith($id) // NAVIGATE TOGETHER WITH SET PATIENT
    {
        if($id == -1) return view('pages.calendar', [
            'appointments' => Appointment::get(),
            'check' => new CheckUtility()
        ]);

        return view('pages.calendar', [
            'check' => new CheckUtility(),
            'patient' => Patient::where('id', $id)->first(),
            'appointments' => Appointment::get()
        ]);
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
            'color' => $this->get_random_color(),
            'done' => null
        ]);

        return redirect(route('appointment.show', $request->patient_id));
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

        $patient = Patient::where('id', $id)->first();

        if($patient->medical_history() == null) return redirect(route('medical-history.edit', $patient->id));

        return view('pages.logbook', [
            'check' => new CheckUtility(),
            'patient' => $patient
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

    public function editIndex($id, $appointment_id) {
        if($id == -1) return redirect(route('appointment.edit'), $id);

        return view('forms.appointment-form', [
            'check' => new CheckUtility(),
            'patient' => Patient::where('id', $id)->first(),
            'appointment' => Appointment::where('id', $appointment_id)->first()
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
        $appointment = Appointment::where('id', $id)->first();
        $appointment->patient_id = $request->patient_id;
        $appointment->tooth_no = $request->tooth_no;
        $appointment->procedure = $request->procedure;
        $appointment->charge = $request->charge;
        $appointment->paid = $request->paid;
        $appointment->appointment = $request->appointment;
        $appointment->start_time = $request->start_time;
        $appointment->end_time = $request->end_time;
        $appointment->update();

        return redirect(route('appointment.show', $request->patient_id));
    }

    public function done(Request $request, $id) {
        $appointment = Appointment::where('id', $id)->first();
        $appointment->done = 'done';
        $appointment->update();

        return redirect(route('appointment.show', $request->patient_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::where('id', $id)->first();
        $patient_id = $appointment->patient_id;
        $appointment->delete();
        return redirect(route('appointment.show', $patient_id));
    }

    public function get_random_color() 
    {
        $colors = array(
            'blue', 'indigo', 'purple', 'pink', 
            'red','orange', 'yellow', 'green', 
            'teal', 'cyan', 'mint-green', 'eukalyptus', 
            'nature', 'gold'
        );

        return $colors[array_rand($colors, 1)];
    }
}
