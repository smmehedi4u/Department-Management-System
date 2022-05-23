<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
            'details' => 'required_without_all:file',
            'file' => 'required_without_all:body',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $event = new Event();

        $event->title = $request->title;
        $event->details = $request->details;
        if ($request->has("file")) {
            $path = $request->file('file')->store('files');
            $event->file = $path;
        }

        $event->date = $request->date;
        $event->added_by = Auth::user()->id;
        $event->save();

        $request->session()->flash('success', 'Event added successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event,$id)
    {
        $event = Event::find($id);
        return view('event.edit' ,compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'details' => 'required_without_all:file',
            'file' => 'required_without_all:body',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $event = Event::find($id);

        $event->title = $request->title;
        $event->details = $request->details;
        if ($request->has("file")) {
            $path = $request->file('file')->store('files');
            $event->file = $path;
        }

        $event->date = $request->date;
        $event->added_by = Auth::user()->id;
        $event->save();

        return redirect()->route('admin.event.index')->with('success','Event update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event,$id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('admin.event.index')->with('success','Event has been delete successfully');
    }
}
