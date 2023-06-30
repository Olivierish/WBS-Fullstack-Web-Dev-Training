<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pt = Post::all();
       return view('post/index')->with('beitraege',$pt);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post/create');

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
            'name1' => 'required | min:3',
            'kom1' => 'required | min:5',
        ]);

        $post = new Post([
            //'nameDerSpalteInDB' => $request['nameDerFeldesInFormular']
            'name' => $request['name1'],
            'beschreibung' => $request['kom1']
        ]);
        $post -> save();
        return redirect('/post');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('post.show') -> with('daten',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit') -> with('daten',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name1' => 'required | min:3',
            'kom1' => 'required | min:5',
        ]);

        $post->update([
            'name' => $request['name1'],
            'beschreibung' => $request['kom1']
        ]);
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
	    return redirect('/post');
    }
}
