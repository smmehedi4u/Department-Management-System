<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Routine;

class TeacherController extends Controller
{
    public function index()
    {
        // Get today's and tomorrow's day name
        $today = date("l");
        $tomorrow = date("l", strtotime("+1 day"));

        // Fetch classes using Eloquent ORM with relationships
        $today_class = Routine::with(['batch', 'subject'])
            ->where("teacher_id", Auth::user()->id)
            ->where("day", $today)
            ->get();

        $next_day_class = Routine::with(['batch', 'subject'])
            ->where("teacher_id", Auth::user()->id)
            ->where("day", $tomorrow)
            ->get();

        return view("teacher.teacher_home", compact("today_class", "next_day_class"));
    }
}

