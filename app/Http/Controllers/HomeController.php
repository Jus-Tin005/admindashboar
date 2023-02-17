<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

     public function userMethod()
    {
        return view('companies.about');
    }

    public function roleMethod()
    {
        // return view('companies.contact');
    }
}
