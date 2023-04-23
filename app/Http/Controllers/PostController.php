<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         /*** query scoop
        * 3andi scopeIsmahen f model class
        */
        $scoope = Post::Ismahen()->first();

       $data = Post::all();
       //$data = Post::get();
       return view('posts.index', compact('data', 'scoope'));
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
    public function store(StorePostRequest $request)
    {

        /** en utilise global validation StorePostRequest
         * app/http/Request/StorePostRequest
         *    f 3oud hedi  $request->validate([ ]);
         * --> chouf update function
         */

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
        public function edit($id)
        {

          $e = Post::findorFail($id);

          //return $e;
          return view('posts.edit', compact('e'));
          //return view('posts.edit', ['e' => Post::findOrfail($id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'requiredunique:posts',
            'description' => 'required ',
        ]);

      $up = Post::findorFail($id);
     //return $up;

       // Methode 1
        // $up->title = $request->title;
        //  $up->description = $request->description;
       //$up->save();

       //Method 2
       //$up->update($request->all());
       //or
       $up->update(['title' => $request->title,
           'description' => $request->description]);

     return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //$d=Post::findOrFail($id)->delete();
        Post::destroy($id);

        return redirect()->route('posts.index');
    }

    public function softDelete()
    {
      /***
       *bech te5dem methode hediya
       *nzid f Post  model  class : use SoftDeletes;
       * nzid f table_posts :  $table->softDeletes();
       *w heka yzidni table f db esmou delelete_at
       *
       */

        $d = Post::onlyTrashed()->get();

        //return redirect()->route('posts.softDelete');
        return view('posts.softDelete', compact('d'));
    }

    public function restoreData($id)
    {
        $r = Post::onlyTrashed()->where('id', $id)->first();
        $r->restore();

        return redirect()->back();
    }

    public function DeleteDefinitely($id)
    {
        $forcedelete = Post::onlyTrashed()->where('id', $id)->first();
        $forcedelete->forceDelete();

        return redirect()->back();
    }
}
