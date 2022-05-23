<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations = Designation::all();
        return view('designation.index', compact('designations'));
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('designation.create');
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
            'title' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $designation = new Designation();

        $designation->title = $request->title;
        $designation->added_by = Auth::user()->id;
        $designation->save();

        $request->session()->flash('success', 'Designation added successfully!');

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(designation $designation)
    {
        return view('designation.show',compact('designation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(Designation $designation,$id)
    {
        $designation = Designation::find($id);
        return view('designation.edit',compact('designation'));
        //return view('designation.edit',compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $designation = Designation::find($id);

        $designation->title = $request->title;
        $designation->added_by = Auth::user()->id;
        $designation->save();

        return redirect()->route('admin.designation.index')->with('success','Designation update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(designation $designation,$id)
    {
        $designation = Designation::find($id);
        $designation->delete();
        return redirect()->route('admin.designation.index')->with('success','Designation has been deleted successfully');
    }
}
