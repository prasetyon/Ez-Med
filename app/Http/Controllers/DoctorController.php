<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Doctor;
use App\Booking;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctor=Doctor::all();
        return view('dashboard/doctor')->with('doctor', $doctor);
    }

    public function doctorlist()
    {
        $doctor=Doctor::all();
        return view('dashboard/doctorlist')->with('doctor', $doctor);
    }

    public function doctortransaction()
    {
        $transaction = Booking::all();
        $doctor=Doctor::all();
        return view('dashboard/doctortransaction')->with('transaction', $transaction);
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
        $doctor = new Doctor();
        $doctor->SIP = $request->sip;      
        $doctor->NAME = $request->name;        
        $doctor->ADDRESS = $request->address;     
        $doctor->PHONE = $request->phone;      
        $doctor->PHOTO = $request->photo;     
        $doctor->INFO = $request->info; 
        $doctor->OPERATIONAL = $request->operational;    
        $doctor->save();        
        return redirect()->route('doctorlist')
            ->with('alert-success', 'Data Berhasil Disimpan.');
    }

    public function update()
    {

    }

    public function show()
    {

    }

    public function destroy()
    {

    }

    public function edit()
    {

    }
}
