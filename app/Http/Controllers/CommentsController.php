<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

<<<<<<< HEAD
class CommentsController extends Controller
=======
class commentsController extends Controller
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return \App\Comment::all();
=======
       return \App\comment::all();
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
<<<<<<< HEAD
        $comment = new \App\Comment;
        $comment->user_id = \Auth::user()->$id;
        $comment->comment_id = $request->comment_id;
        $comment->post_id = $request->post_id;
        $comment->comment_content = $request->comment_content;
=======
        $comment = new \App\comment;
        $comment->content = $request->comment_content;
        $comment->user_id = \Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->comment_id = $request->comment_id;
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
        $comment->save();

        return $comment;
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
        return \App\Comment::find($id);
=======
        return \App\comment::find($id);
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
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
<<<<<<< HEAD
        $comment = \App\Comment::find($id);
        if ($comment->user_id == \Auth::user()->id) {
            $comment->comment_content = $request->comment_content;
=======
        $comment = \App\comment::find($id);
        if ($comment->user_id == \Auth:: user()->id) {
            $comment->content = $request->comment_content;
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
            $comment->save();
        } else {
            return response("Unauthorized", 403);
        }

        return $comment;
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
        $comment = \App\Comment::find($id);
=======
        $comment = \App\comment::find($id);
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
        if ($comment->user_id == \Auth::user()->id) {
            $comment->delete();
        } else {
            return response("Unauthorized", 403);
        }
<<<<<<< HEAD
        return $comment;
=======
        return $comment;   
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    }
}
