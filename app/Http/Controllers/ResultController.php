<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('result.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('result.create');
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
            'file' => 'required_without_all:body',
            'date' => 'required',
            'batch_id' => 'required',
            'result_type' => 'required',

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $result = new Result();

        if ($request->has("file")) {
            $path = $request->file('file')->store('files');
            $result->file = $path;
        }

        $result->date = $request->date;
        $result->batch_id = $request->batch_id;
        $result->result_type = $request->result_type;

        $result->added_by = Auth::user()->id;
        $result->save();

        $request->session()->flash('success', 'Result added successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(result $result,$id)
    {
        $result = Result::find($id);
        return view('result.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required_without_all:body',
            'date' => 'required',
            'batch_id' => 'required',
            'result_type' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $result = Result::find($id);

        if ($request->has("file")) {
            $path = $request->file('file')->store('files');
            $result->file = $path;
        }

        $result->date = $request->date;
        $result->batch_id = $request->batch_id;
        $result->result_type = $request->result_type;

        $result->added_by = Auth::user()->id;
        $result->save();

        return redirect()->route('admin.result.index')->with('success','Result update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(result $result,$id)
    {
        $result = Result::find($id);
        $result->delete();
        return redirect()->route('admin.result.index')->with('success','Result delete successfully');
    }
}
