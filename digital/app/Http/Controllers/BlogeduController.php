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
    public function store(Request $request)
    {
        //
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