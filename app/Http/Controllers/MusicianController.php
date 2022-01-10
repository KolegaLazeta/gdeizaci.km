<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musicians;

class MusicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('musicians.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.musician.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image' => 'required'
        ]);
        
        $data = $request->all();

        $imageName =time() . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/uploads/'), $imageName);
        $data['image'] = $imageName;

        Musicians::create($data);

        return redirect()->back()->with(['message' => 'Uspesno ste dodali muzicara!', 'alert' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Musicians $musician)
    {
        return view('musicians.show', compact('musician'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musicians $musician)
    {
        $musician->delete();
        return redirect()->back()->with(['message' => 'Uspesno ste uklonili muzicara!', 'alert' => 'alert-success']);
        
    }
    public function admin()
    {
        $musicians = Musicians::all();
        return view('admin.musician.index', compact('musicians'));
    }
}
