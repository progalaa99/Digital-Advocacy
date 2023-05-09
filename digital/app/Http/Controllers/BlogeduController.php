<?php

namespace App\Http\Controllers;

use App\Models\blogedu;
use Illuminate\Http\Request;

class BlogeduController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogedu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$user_id)
    {
        $id = $user_id;
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'cover' => 'required|file|mimes:jpg|max:500000',
        ]);
        $file = $request->file('cover');
        $path = $file->move('uploads/blogedu');
        $blogedu = blogedu::create([
            'user_id' => $id,
            'title' => $request->title,
            'body' => $request->body,
            'cover' => $path,
        ]);
        return redirect()->route('site-message');
    }

    /**
     * Display the specified resource.
     */
    public function show(blogedu $blogedu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blogedu $blogedu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blogedu $blogedu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogedu $blogedu)
    {
        //
    }
}