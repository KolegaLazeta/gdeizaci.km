<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parties;
use App\Models\Places;
use App\Models\Blogs;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $thisWeek = Parties::latest()->paginate(2);
        $parties = Parties::all();
        $places = DB::table('places')->paginate(3);
        $blogs = DB::table('blogs')->paginate(2);

        return view('home', compact('parties', 'places', 'thisWeek', 'blogs'));
    }

    public function about()
    {
        return view('about');
    }
}
