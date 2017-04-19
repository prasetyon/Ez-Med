<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index()
    {
        return view('dashboard/doctor');
    }

    public function doctorlist()
    {
         return view('dashboard/doctorlist');
    }

    public function create()
    {

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
