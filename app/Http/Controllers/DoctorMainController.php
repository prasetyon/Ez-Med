<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Doctor;
use App\Booking;

class DoctorMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaction()
    {
        $transaction = Booking::all();
        return view('doctor/transaction')->with('transaction', $transaction);
    }

    public function edit()
    {
        $doctor = Doctor::where('SIP', '5355/5355/3535/2019')->get();
        return view('doctor/edit')->with('doctor', $doctor);
    }

    public function editinfo(Request $request)
    {
        $input = Input::all();
        $doctor = Doctor::where('SIP', '5355/5355/3535/2019')->update(['NAME'=>$input['name'], 'ADDRESS'=>$input['address'], 'PHONE'=>$input['phone'], 'INFO'=>$input['info'], 'OPERATIONAL'=>$input['operational']]);

        $doctor = Doctor::where('SIP', '5355/5355/3535/2019')->get();
        return view('doctor/edit')->with('doctor', $doctor);
    }

    public function verify(Request $request)
    {
        $transaction = Booking::all();
        return view('doctor/transaction')->with('transaction', $transaction);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
