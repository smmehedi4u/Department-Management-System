<?php

namespace App\Http\Controllers;

use App\Models\routine;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routines = Routine::all();
        return view('routine.index', compact('routines'));
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
    public function edit(routine $routine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, routine $routine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function destroy(routine $routine)
    {
        //
    }
}
