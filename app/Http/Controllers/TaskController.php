<?php

namespace App\Http\Controllers;

use App\Models\Task;
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
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
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
        return view('task.edit', compact('task'));
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
        $task->delete();
        return redirect()->route('admin.task.index')->with('success','Task delete successfully');
    }
}
