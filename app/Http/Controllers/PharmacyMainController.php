<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pharmacy;
use App\Transaction;
use App\Medicine;

class PharmacyMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pharmacy/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaction()
    {
        $transaction = Transaction::all();
        return view('pharmacy/transaction')->with('transaction', $transaction);
    }

    public function edit()
    {
        $pharmacy = Pharmacy::where('SIA', 'XXX/XXX/26/5/2017')->get();
        return view('pharmacy/edit')->with('pharmacy', $pharmacy);
    }

    public function editinfo(Request $request)
    {        
        $input = Input::all();
        $pharmacy = Pharmacy::where('SIA', 'XXX/XXX/26/5/2017')->update(['NAME'=>$input['name'], 'ADDRESS'=>$input['address'], 'OWNER'=>$input['owner'], 'PHONE'=>$input['phone'], 'INFO'=>$input['info'], 'OPERATIONAL'=>$input['operational']]);

        $pharmacy = Pharmacy::where('SIA', 'XXX/XXX/26/5/2017')->get();
        return view('pharmacy/edit')->with('pharmacy', $pharmacy);
    }

    public function addobat()
    {
        $pharmacy = Pharmacy::where('SIA', 'XXX/XXX/26/5/2017')->get();
        $medicine = Medicine::where('SIA', 'XXX/XXX/26/5/2017')->get();
        return view('pharmacy/addobat')->with('pharmacy', $pharmacy)->with('medicine', $medicine);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $medicine = new Medicine();
        $medicine->ID_MEDICINE = $request->idmedicine;
        $medicine->SIA = 'XXX/XXX/26/5/2017';
        $medicine->NAME = $request->name;
        $medicine->STOCK = $request->stock;
        $medicine->PRICE = $request->price;
        $medicine->save();

        $pharmacy = Pharmacy::where('SIA', 'XXX/XXX/26/5/2017')->get();
        $medicine = Medicine::where('SIA', 'XXX/XXX/26/5/2017')->get();
        return view('pharmacy/addobat')->with('pharmacy', $pharmacy)->with('medicine', $medicine);
    }

    public function verify(Request $request)
    {
        $transaction = Transaction::all();
        return view('pharmacy/transaction')->with('transaction', $transaction);
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
