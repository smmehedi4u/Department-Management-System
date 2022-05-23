<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notice.create');
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
            'body' => 'required_without_all:file',
            'file' => 'required_without_all:body',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }



        $notice = new Notice();

        $notice->title = $request->title;
        $notice->details = $request->body;
        if ($request->has("file")) {
            $path = $request->file('file')->store('files');
            $notice->file = $path;
        }
        $notice->added_by = Auth::user()->id;
        $notice->save();

        $request->session()->flash('success', 'Notice added successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notic  $notic
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        return view('notice.show',compact('notices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notic  $notic
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice,$id)
    {

        $notice = Notice::find($id);
        return view('notice.edit',compact('notice'));
        //return view('notice.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body' => 'required_without_all:file',
            'file' => 'required_without_all:body',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)  
                ->withInput();
        }



        $notice = Notice::find($id);

        $notice->title = $request->title;
        $notice->details = $request->body;
        if ($request->has("file")) {
            $path = $request->file('file')->store('files');
            $notice->file = $path;
        }
        $notice->added_by = Auth::user()->id;
        $notice->save();

        $request->session()->flash('success', 'Notice update successfully!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notic  $notic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        return redirect()->route('admin.notice.index')->with('success','Notice has been deleted successfully');
    }
}
