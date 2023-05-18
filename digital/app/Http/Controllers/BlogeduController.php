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
        
        // $blogedus = blogedu::latest()->with('blogedu')->paginate(3);
        $blogedus = blogedu::get();
        $blogedus = blogedu::paginate(3);
       
        return view('blogedu.technical-edu',['blogedus'=>$blogedus]);
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
            'cover' => 'required|file|mimes:jpg,png,jpeg|max:500000',
        ]);
        $file = $request->file('cover');
        $path = $file->move('uploads/blogedu');
        $blogedu = blogedu::create([
            'user_id' => $id,
            'title' => $request->title,
            'body' => $request->body,
            'cover' => $path,
        ]);
        return redirect()->route('blogedu.technical-edu');
    }

    /**
     * Display the specified resource.
     */
    public function show(blogedu $blogedu , $id)
    {
        $blogedu = blogedu::findOrFail($id);
        
        return view('blogedu.show',['blogedu'=>$blogedu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blogedu $blogedu,$id)
    {
        $blogedu =blogedu::find($id);
        // return view('product.edit',compact('product'));
        return view('blogedu.update',compact('blogedu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blogedu $blogedu ,$blogeduid)
    {
        // $blogedu =blogedu::find($blogeduid);
         $data=blogedu::find($blogeduid);
        $data->title = $request->title;
        $data->body = $request->body;
        
        
        $data->update();      
        return redirect()->route('blogedu.technical-edu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogedu $blogedu,$id)
    {
        $blogedu =blogedu::find($id);

        $blogedu->delete();
        return redirect()->route('blogedu.technical-edu');
    }
}