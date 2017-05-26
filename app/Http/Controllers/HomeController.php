<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth/login');
    }

    public function loginvalidate()
    {
            $username=Input::get('username');
            if($username=='admin')
            {
                return Redirect::to('admins');
            }
            else if($username=='doctor')
            {
                return Redirect::to('doctors');
            }
            else if($username=='pharmacy')
            {
                return Redirect::to('pharmacys');
            }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
