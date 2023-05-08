<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      //

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$user_id)
    { 
        $id = $user_id;
        $request->validate([
            'user_id'=> $id,
            'name'=>'required',
            'nameblackmailer'=>'required',
            'Blackmailerinfo'=>'required',
            'file'=>'required|file|mimes:pdf|max:500000',
            'Detailedinfo'=>'required',
        ]);
       
        $file = $request->file('file');
        $path = $file->move('uploads/archive');

        $complaint = Complaint::create([
            'user_id'=>$user_id,
            'name'=>$request->name,
            'nameblackmailer'=>$request->nameblackmailer,
            'Blackmailerinfo'=>$request->Blackmailerinfo,
            'file'=>$path,
            'Detailedinfo'=>$request->Detailedinfo,
            
           
        ]);
        // $complaint = Complaint::create($request->all());
        
        return redirect()->route('site-message');
    }

    /**
     * Display the specified resource.
     */
    public function show(Complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        //
    }
}
