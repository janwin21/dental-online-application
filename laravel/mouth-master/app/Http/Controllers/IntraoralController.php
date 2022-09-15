<?php

namespace App\Http\Controllers;

use App\Models\CheckUtility;
use App\Models\Intraorals;
use Illuminate\Http\Request;

class IntraoralController extends Controller
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
        $size = count($request->all()) - 2;
        $check = new CheckUtility();
        $intraoral_arr = $check->to_array($request, $size, 'intraoral_');

        Intraorals::create([
            'patient_id' => $request->patient_id,
            'data' => $check->toString($intraoral_arr)
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
        return view('forms.intraoral-examination', [
            'id' => $id
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
