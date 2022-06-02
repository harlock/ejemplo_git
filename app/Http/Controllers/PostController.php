<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
        $posts=Post::join("Users","posts.user_id","=","users.id")
            ->select("posts.*","users.name")
            ->get();
       // dd($posts);
        $posts=Post::all();
        return view("posts.index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
       // dd($users);

        return view("posts.create",compact("users"));
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
            'title' => 'required',
            'content' => 'required',
            'state' => 'required|integer',
            'tags' => 'required',
            'user_id' => 'required',
        ]);
        Post::create($request->all());

        //return $this->index();
        return redirect()->route('posts.index')
            ->with('success', 'Resgistro exitoso!!.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$posts)
    {
        dd($request);
        $posts=Post::find($posts);
        dd($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("posts.edit",compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'state' => 'required|integer',
            'tags' => 'required',
            'user_id' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Actualización exitosa!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       $post->delete();
       return redirect()->route("posts.index")->with("success","Post eliminado corectamente");
    }
}
