<?php

namespace App\Http\Controllers;

use App\Models\Blogsupport;
use Illuminate\Http\Request;

class BlogsupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogsupports = Blogsupport::get();
        $blogsupports = Blogsupport::paginate(3);
       
        return view('blogsupport.support',['blogsupports'=>$blogsupports]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogsupport.create');

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
        $path = $file->move('uploads/blogsupport');
        $blogsupports = Blogsupport::create([
            'user_id' => $id,
            'title' => $request->title,
            'body' => $request->body,
            'cover' => $path,
        ]);
        return redirect()->route('blogsupport.support');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogsupport $blogsupport,$id)
    {
        $blogsupports = Blogsupport::findOrFail($id);
        
        return view('blogsupport.show',['blogsupports'=>$blogsupports]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogsupport $blogsupport)
    {
        $blogsupport =Blogsupport::find($id);
        // return view('product.edit',compact('product'));
        return view('blogsupport.update',compact('blogsupport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogsupport $blogsupport,$blogeduid)
    {
        $blogsupport=Blogsupport::find($blogeduid);
        $blogsupport->title = $request->title;
        $blogsupport->body = $request->body;
        
        
        $blogsupport->update();      
        return redirect()->route('blogsupport.support');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogsupport $blogsupport)
    {
        $blogsupport =Blogsupport::find($id);

        $blogsupport->delete();
        return redirect()->route('blogsupport.support');
    }
}
