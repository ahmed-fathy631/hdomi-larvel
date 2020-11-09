<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    //Contact page

    public function Contact()
    {
        return view('Contact');
    }
    //Discounts page

    public function Discounts()
    {
        return view('Discounts');
    }
    //Accessories page

    public function accessories()
    {
        return view('accessories');
    }
}
