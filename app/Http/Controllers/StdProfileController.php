<?php

namespace App\Http\Controllers;

use App\Models\StdProfile;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StdProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $stdprofile = StdProfile::where("user_id", $user->id)->join("batches", "batches.id", "std_profiles.batch_id")->join("users", "users.id", "std_profiles.user_id")->select("std_profiles.*", "batches.session as batch_session", "batches.name as batch_name", "users.name as user_name", "users.email as user_email")->first();

        return view('stdprofile.index', compact('user', "stdprofile"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StdProfile  $stdProfile
     * @return \Illuminate\Http\Response
     */
    public function show(StdProfile $stdProfile)
    {
        $user = auth()->user();

        $stdprofile = StdProfile::where("user_id", $user->id)->join("batches", "batches.id", "std_profiles.batch_id")->join("users", "users.id", "std_profiles.user_id")->select("std_profiles.*", "batches.session as batch_session", "batches.name as batch_name", "users.name as user_name", "users.email as user_email")->first();
        dd($stdprofile);
        return view('stdprofile.index', compact('user', "stdprofile"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StdProfile  $stdProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(StdProfile $stdProfile)
    {
        $user = auth()->user();
        $stdprofile = StdProfile::where("user_id", $user->id)->first();
        $batches = Batch::all();
        return view('stdprofile.edit', compact('user', "stdprofile", "batches"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StdProfile  $stdProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StdProfile $stdProfile)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'address' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();

        $user->name = $request->name;
        $user->save();


        $stdprofile = StdProfile::where("user_id", $user->id)->first();

        $stdprofile->batch_id = $request->batch_id;

        $stdprofile->mobile = $request->mobile;
        $stdprofile->address = $request->address;
        $stdprofile->save();

        return redirect()->route('student.stdprofile.index')->with('success', 'Profile update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StdProfile  $stdProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(StdProfile $stdProfile)
    {
        //
    }
}
