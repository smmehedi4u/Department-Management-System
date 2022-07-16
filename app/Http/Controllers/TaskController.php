<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Batch;
use App\Models\Routine;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subjects_assigned = Routine::where("teacher_id", Auth::user()->id)->pluck("subject_id");
        $tasks = Task::join("subjects", "subjects.id", "=", "tasks.subject_id")
        ->join("batches", "batches.id", "=", "tasks.batch_id");
        if (Auth::user()->user_role == 1) {
            $tasks = $tasks->where("tasks.added_by", Auth::user()->id);
        }
        $tasks = $tasks->select("tasks.*", "subjects.name as sub_name", "batches.name as batch_name")
        // dd($tasks->toSql());
        ->get();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->user_role == 1) {
            $batches = Batch::join("routines", function ($joins) {
                $joins->on("routines.batch_id", "=", "batches.id")
                ->where("routines.teacher_id", Auth::user()->id);
            })->select("batches.*")->distinct()->get();
            $subjects = Subject::join("routines", function ($joins) {
                $joins->on("routines.subject_id", "=", "subjects.id")
                ->where("routines.teacher_id", Auth::user()->id);
            })->select("subjects.*")->get();
        } else {

        $batches = Batch::all();
        $subjects = Subject::all();
        }

        return view('task.create',compact('batches','subjects'));
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
            'subject_id' => 'required',
            'batch_id' => 'required',
            'details' => 'required',
            'end_date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $task = new Task();

        $task->subject_id = $request->subject_id;
        $task->batch_id = $request->batch_id;
        $task->details = $request->details;
        $task->end_date = $request->end_date;

        $task->added_by = Auth::user()->id;
        $task->save();

        $request->session()->flash('success', 'Task added successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(task $task,$id)
    {
        $task = Task::find($id);
        if ($task) {
            if (Auth::user()->user_role == 1 && $task->added_by != Auth::user()->id) {
                return redirect()->route('admin.task.index')->with('success', 'You dont have permission to edit this task');
            }
        }
        if (Auth::user()->user_role == 1) {
            $batches = Batch::join("routines", function ($joins) {
                $joins->on("routines.batch_id", "=", "batches.id")
                ->where("routines.teacher_id", Auth::user()->id);
            })->select("batches.*")->distinct()->get();
            $subjects = Subject::join("routines", function ($joins) {
                $joins->on("routines.subject_id", "=", "subjects.id")
                ->where("routines.teacher_id", Auth::user()->id);
            })->select("subjects.*")->get();
        } else {

        $batches = Batch::all();
        $subjects = Subject::all();
        }
        return view('task.edit', compact('task','batches','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'subject_id' => 'required',
            'batch_id' => 'required',
            'details' => 'required',
            'end_date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $task = Task::find($id);

        $task->subject_id = $request->subject_id;
        $task->batch_id = $request->batch_id;
        $task->details = $request->details;
        $task->end_date = $request->end_date;

        $task->added_by = Auth::user()->id;
        $task->save();

        return redirect()->route('admin.task.index')->with('success','Task update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task,$id)
    {
        $task = Task::find($id);
        if ($task) {
            if (Auth::user()->user_role == 1 && $task->added_by != Auth::user()->id) {
                return redirect()->route('admin.task.index')->with('success', 'You dont have permission to delete this task');
            } else {
                $task->delete();
            }
        }
        return redirect()->route('admin.task.index')->with('success','Task delete successfully');
    }
}
