<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('student')){
            return view('student');
       }elseif(Auth::user()->hasRole('teacher')){
            return view('teacher');
       }elseif(Auth::user()->hasRole('admin')){
        return view('admin');
       }
   }

//    public function myprofile()
//    {
//     return view('myprofile');
//    }

//    public function postcreate()
//    {
//     return view('postcreate');
//    }
}