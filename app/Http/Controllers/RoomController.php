<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.create');
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
            'room_no' => 'required',
            'allotment_for' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $room = new Room();

        $room->room_no = $request->room_no;
        $room->allotment_for = $request->allotment_for;

        $room->added_by = Auth::user()->id;
        $room->save();

        $request->session()->flash('success', 'Room added successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(room $room,$id)
    {
        $room = Room::find($id);
        return view('room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'room_no' => 'required',
            'allotment_for' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $room = Room::find($id);

        $room->room_no = $request->room_no;
        $room->allotment_for = $request->allotment_for;

        $room->added_by = Auth::user()->id;
        $room->save();

        return redirect()->route('admin.room.index')->with('success','Room update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room,$id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('admin.room.index')->with('success','Room has been delete successfully');
    }
}
