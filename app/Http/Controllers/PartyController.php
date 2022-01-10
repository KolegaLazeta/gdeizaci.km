<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musicians;
use App\Models\Places;
use App\Models\Parties;
use Illuminate\Support\Facades\DB;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties = Parties::latest()->get();   
        return view('parties.index', compact('parties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Places::all();
        $musicians = Musicians::all();
        $days = ['ponedeljak', 'utorak', 'sreda', 'cetvrtak', 'petak', 'subota', 'nedelja'];
        return view('admin.party.create', compact('places', 'musicians', 'days'));
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
            'place_id'=>'required',
            'musician_id'=>'required',
            'user_id'=>'required',
            'title'=>'required',
            'description'=>'required',
            'maxGuests'=>'required',
            'ticketPrice'=>'required',
            'image'=>['required','image'],
            'day'=>'required',
        ]);
        $data = $request->all();
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/uploads/'), $imageName);
        $data['image']= $imageName;

        Parties::create($data);
        return redirect()->back()->with(['message' => 'Uspesno ste kreirali zurku!', 'alert' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Parties $party, Musicians $musician)
    {
        return view('parties.show', compact('party', 'musician'));
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
    public function destroy(Parties $party)
    {
        $party->delete();
        return redirect()->back()->with(['message' => 'Uspesno ste uklonili zurku
        !', 'alert' => 'alert-success']);
    }
    public function admin()
    {
        $parties = Parties::all();
        return view('admin.party.index', compact('parties'));
    }
}
