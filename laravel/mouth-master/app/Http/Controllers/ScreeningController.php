<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Screenings;
use Illuminate\Http\Request;

class ScreeningController extends Controller
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
        Screenings::create([
            'patient_id' => $request->patient_id,
            'p1' => $request->p1,
            'p2' => $request->p2,
            'p3' => $request->p3,
            'p4' => $request->p4,
            'a1' => $request->a1,
            'a2' => $request->a2,
            'o1' => $request->o1,
            'o2' => $request->o2,
            'o3' => $request->o3,
            'o4' => $request->o4,
            'o5' => $request->o5,
            't1' => $request->t1,
            't2' => $request->t2,
            't3' => $request->t3,
            't4' => $request->t4
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

        return view('forms.screening-form', [
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
        $screening = Screenings::where('id', $id)->first();
        $screening->touch();
        return redirect(route('patient.show', $screening->patient_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $screening = Screenings::where('id', $id)->first();
        $patient_id = $screening->patient_id;
        $screening->delete();
        return redirect(route('patient.show', $patient_id));
    }
}
