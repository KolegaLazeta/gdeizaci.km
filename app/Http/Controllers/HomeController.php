<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parties;
use App\Models\Places;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $thisWeek = Parties::latest()->paginate(3);
        $parties = Parties::all();
        $places = DB::table('places')->paginate(3);

        return view('home', compact('parties', 'places', 'thisWeek'));
    }
}
