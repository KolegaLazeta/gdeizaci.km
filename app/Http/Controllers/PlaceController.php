<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Places;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Places::all();
        return view('places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.place.create');
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
            'phone' => 'required',
            'map' => 'required',
            'image' => 'required',
        ]);
        
        $data = $request->all();

        $imageName =time() . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/uploads/'), $imageName);
        $data['image'] = $imageName;

        Places::create($data);

        return redirect()->back()->with(['message' => 'Uspesno ste dodali objekat!', 'alert' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Places $place)
    {
        
        return view('places.show', compact('place'));
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
    public function destroy(Places $place)
    {
        $place->delete();
        return redirect()->back()->with(['message' => 'Uspesno ste uklonili objekat!', 'alert' => 'alert-success']);
    }

    public function admin()
    {
        $places = Places::all();
        return view('admin.place.index', compact('places'));
    }
}
