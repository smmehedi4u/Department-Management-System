<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use App\Models\Batch;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routines = Routine::join("batches", "batches.id", "=", "routines.batch_id")
        ->join("subjects", "subjects.id", "=", "routines.subject_id")
        ->join("users", "users.id", "=", "routines.teacher_id")
        ->select("routines.*", "batches.name as batch_name", "subjects.name as sub_name", "users.name as teacher_name")
        ->get();
        return view('routine.index', compact('routines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batches = Batch::all();
        $subjects = Subject::all();
        $teachers = User::where('user_role', 1)->get();
        return view('routine.create', compact('batches', 'subjects', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'batch_id' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
            'day' => 'required',
            'from_time' => 'required',
            'to_time' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $routine = new Routine();

        $routine->batch_id = $request->batch_id;
        $routine->subject_id = $request->subject_id;
        $routine->teacher_id = $request->teacher_id;
        $routine->day = $request->day;
        $routine->from_time = $request->from_time;
        $routine->to_time = $request->to_time;

        $routine->added_by = Auth::user()->id;
        $routine->save();

        $request->session()->flash('success', 'Routine added successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function show(routine $routine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function edit(routine $routine,$id)
    {
        $routine = Routine::find($id);
        $batches = Batch::all();
        $subjects = Subject::all();

        $teachers = User::where('user_role', 1)->get();
        return view('routine.edit', compact('routine', 'batches', 'subjects', "teachers"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'batch_id' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
            'day' => 'required',
            'from_time' => 'required',
            'to_time' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $routine = Routine::find($id);

        $routine->batch_id = $request->batch_id;
        $routine->subject_id = $request->subject_id;
        $routine->teacher_id = $request->teacher_id;
        $routine->day = $request->day;
        $routine->from_time = $request->from_time;
        $routine->to_time = $request->to_time;

        $routine->added_by = Auth::user()->id;
        $routine->save();

        return redirect()->route('admin.routine.index')->with('success','Routine update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function destroy(routine $routine,$id)
    {
        $routine = Routine::find($id);
        $routine->delete();
        return redirect()->route('admin.routine.index')->with('success','Routine delete successfully');
    }
}
