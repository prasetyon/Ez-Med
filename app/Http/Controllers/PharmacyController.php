<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;

class PharmacyController extends Controller
{
    //
    public function index()
    {
        $pharmacy = Pharmacy::all();
        return view('dashboard/pharmacy')->with('pharmacy', $pharmacy);
    }

    public function pharmacylist()
    {
        $pharmacy = Pharmacy::all();
        return view('dashboard/pharmacylist')->with('pharmacy', $pharmacy);
    }

    public function create()
    {

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
        $pharmacy = new Pharmacy();   
        $pharmacy->username = $request->username;  
        $pharmacy->password = $request->password;       
        $pharmacy->name = $request->name;    
        $pharmacy->owner = $request->owner;      
        $pharmacy->address = $request->address;     
        $pharmacy->phone = $request->phone;      
        $pharmacy->photo = $request->photo;     
        $pharmacy->info = $request->info; 
        $pharmacy->operational = $request->operational;    
        $pharmacy->save();        
        return redirect()->route('pharmacylist')
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
