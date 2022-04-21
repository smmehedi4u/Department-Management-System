<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function __construct()
     {
          $this->middleware('auth');
     }

     public function index()
     {
          if (Auth::user()->user_role == 0) {
               return Redirect('/student');
          } elseif (Auth::user()->user_role == 1) {
               return Redirect('/teacher');
          } elseif (Auth::user()->user_role == 2) {
               return Redirect('/admin');
          }
     }
}
