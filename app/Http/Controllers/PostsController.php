<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return \App\Post::with('subbreddit')->orderBy('id', 'desc')->get();
=======
        return \App\Post::all();
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new \App\Post;
        $post->title = $request->title;
<<<<<<< HEAD
        $post->post_content = $request->post_content;
        $post->subbreddit_id = $request->subbreddit_id;
        $post->user_id = \Auth::user()->id;
        $post->url = $request->url;

=======
        $post->content = $request->post_content;
        $post->subbreddit_it = $request->subbreddit_id;
        $post->user_id = \Auth::user()->id;
        $post->url = $request->url;
        
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
        $post->save();

        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        return \App\Post::find($id);
    }


=======
        return \App\Post::with('subbreddit')->get();
    }

>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = \App\Post::find($id);
<<<<<<< HEAD
        if ($post->user_id == \Auth::user()->id) {
            $post->title = $request->title;
            $post->post_content = $request->post_content;
            $post->url = $request->url;

=======
        if ($post->user_id == \Auth:: user()->id) {
            $post->title = $request->title;
            $post->content = $request->post_content;
            $post->url = $request->url;
        
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
            $post->save();
        } else {
            return response("Unauthorized", 403);
        }
<<<<<<< HEAD

=======
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $post = \App\Post::find($id);
=======
        $post = \App\post::find($id);
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
        if ($post->user_id == \Auth::user()->id) {
            $post->delete();
        } else {
            return response("Unauthorized", 403);
<<<<<<< HEAD
        }
        return $post;
=======
        } 
        return $post;    
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    }
}
