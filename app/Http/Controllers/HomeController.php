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
    // public function student()
    // {
    //     return view('student');
    // }
    // public function teachers()
    // {
    //     return view('teachers ');
    // }
    public function classes()
    {
        return view('classes ');
    }
    public function Attendance()
    {
        return view('Attendance ');
    }
    public function Exams()
    {
        return view('Exams');
    }
    // public function workers()
    // {
    //     return view('workers');
    // }
    public function dommitory()
    {
        return view('dommitory');
    }
    public function noofclasses()
    {
        return view('noofclasses');
    }
    public function dorms()
    {
        return view('students.index');
    } 
    public function lakeview()
    {
        return view('lakeview');
    }
     public function mountainview()
    {
        return view('mountainview');
    }
    public function cityview()
    {
        return view('cityview');
    }
   public function mojadom()
    {
        return view('mojadom');
    } 
    public function hillmalayas()
    {
        return view('hillmalayas');
    } 
}
