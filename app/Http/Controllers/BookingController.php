<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = auth()->user()->booking()->latest()->get();
    
        return view('bookings.index', compact('bookings'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'guestNumber'=>'required',
            'user_id'=>'required',
        ]);
        $data = $request->all();

        Bookings::create($data);
        
        return redirect()->back()->with(['message' => 'Uspesno ste prosledili rezervaciju!', 'alert' => 'alert-success']);
    }
    public function update(Bookings $booking, Request $request)
    {
        $booking->update($request->all());
        return redirect()->back();
    }
}
