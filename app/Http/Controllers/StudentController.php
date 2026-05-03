<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\StdProfile;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function index()
    {
        $sp = StdProfile::with('batch')->where('user_id', Auth::id())->first();

        $today = Carbon::now()->format('l');
        $tomorrow = Carbon::now()->addDay()->format('l');

        $today_class = $sp->batch->routines()->with(['subject', 'teacher'])->where('day', $today)->get();

        $next_day_class = $sp->batch->routines()->with(['subject', 'teacher'])->where('day', $tomorrow)->get();

        $pending_task = $sp->batch->tasks()->with('subject')->where('end_date', '>=', now()->toDateString())->get();

        return view("student.student_home", compact("today_class", "next_day_class", "pending_task"));
    }
}
