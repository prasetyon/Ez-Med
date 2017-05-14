<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Transaction;

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
        $transaction = Transaction::whereNotNull('SIP');
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
        $doctor->username = $request->username;  
        $doctor->password = $request->password;          
        $doctor->name = $request->name;        
        $doctor->address = $request->address;     
        $doctor->phone = $request->phone;      
        $doctor->photo = $request->photo;     
        $doctor->info = $request->info; 
        $doctor->operational = $request->operational;    
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
