<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data = Post::all();
       //$data = Post::get();
       return view('posts.index', compact('data'));
        //return view('posts.index', ['data' => Post::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required ',
        ]);
        //Methode 1
        // $p = new Post();
        // $p->title = $request->title;
        //  $p->description = $request->description;
        //  $p->save();
        //Methode 2
        // create --> ['name column of db => 'name input of form']

        // Post::create([
        //     'title' => $request->title,
        //     'description' => $request->description]);
        Post::create($request->all());
//Add [title] to fillable property to allow mass assignment on [App\Models\Post].
// so i have to add title and description to the Model class
         return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
