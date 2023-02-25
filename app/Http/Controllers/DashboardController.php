<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        // if (Auth::user()) {
        //     return redirect()->route('home');
        // } else {
        //     return view('welcome');
        // }
      return  Auth::user()? redirect()->route('home'): view('welcome') ;
    }
}
