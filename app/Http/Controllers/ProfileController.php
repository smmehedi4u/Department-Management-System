<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $profile = Profile::where("user_id",$user->id)->join("designations","designations.id","profiles.designation_id")->join("users","users.id","profiles.user_id")->select("profiles.*","designations.title as designation_name","users.name as user_name","users.email as user_email")->first();
        // dd($profile);
        return view('profile.index', compact('user',"profile"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        $user = auth()->user();

        $profile = Profile::where("user_id",$user->id)->join("designations","designations.id","profiles.designation_id")->join("users","users.id","profiles.user_id")->select("profiles.*","designations.title as designation_name","users.name as user_name")->first();

        return view('profile.index', compact('user',"profile"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user = auth()->user();
        $profile = Profile::where("user_id",$user->id)->first();
        $designations = Designation::all();
        return view('profile.edit', compact('user',"profile","designations"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
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


        $profile = Profile::where("user_id",$user->id)->first();

        $profile->designation_id = $request->designation_id;

        $profile->mobile = $request->mobile;
        $profile->address = $request->address;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/img'), $filename);
            $profile->image = $filename;
        }
        $profile->save();

        return redirect()->route('teacher.profile.index')->with('success','Profile update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
