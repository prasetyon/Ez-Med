<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pharmacy;
use App\Transaction;

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

    public function pharmacytransaction()
    {
        $transaction = Transaction::all();
        return view('dashboard/pharmacytransaction')->with('transaction', $transaction);
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
        $pharmacy->SIA = $request->sia;    
        $pharmacy->NAME = $request->name;    
        $pharmacy->OWNER = $request->owner;      
        $pharmacy->ADDRESS = $request->address;     
        $pharmacy->PHONE = $request->phone;      
        $pharmacy->PHOTO = $request->photo;     
        $pharmacy->INFO = $request->info; 
        $pharmacy->OPERATIONAL = $request->operational;    
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
