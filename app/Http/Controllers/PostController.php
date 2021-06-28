<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


// soft delete and scope pending in eloquent for more reference check https://laravel.com/docs/8.x/eloquent
// there are many more methods in the eloquent you can check it heat https://laravel.com/docs/8.x/eloquent
// there are also many more configurations you can do in model like fillable, time stamp etc
// to check them go to https://laravel.com/docs/8.x/eloquent
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Post::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->like = $request->like;
        $post->save();

        // Post::create([
        //     'title' => 'third',
        //     'content' => 'sadhj sadlj',
        //     'like' => 12
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return $post;
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
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->like = $request->like;
        $post->save();

        // Post::where('id', $id)->update([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'like' => $request->like
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
    }
}
