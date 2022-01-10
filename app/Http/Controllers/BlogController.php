<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Places;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Places::latest()->paginate(3);
        $blogs = Blogs::all();
        return view('blog.index', compact('blogs', 'places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'title'=>'required',
            'blog'=>'required',
            "image"=>'required'
        ]);

        $data = $request->all();

        $imageName =time() . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/uploads/'), $imageName);
        $data['image'] = $imageName;

        Blogs::create($data);

        return redirect()->back()->with(['message' => 'Uspesno ste kreirali blog!', 'alert' => 'alert-success']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blog)
    {
        return view('blog.show', compact('blog'));
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
    public function destroy(Blogs $blog)
    {
        $blog->delete();
        return redirect()->back()->with(['message' => 'Uspesno ste uklonili blog!', 'alert' => 'alert-success']);
    }

    public function admin()
    {
        $blogs = Blogs::all();
        return view('admin.blog.index', compact('blogs'));
    }
}
