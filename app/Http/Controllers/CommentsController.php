<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class commentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return \App\comment::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new \App\comment;
        $comment->content = $request->comment_content;
        $comment->user_id = \Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->comment_id = $request->comment_id;
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
        return \App\comment::find($id);
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
        $comment = \App\comment::find($id);
        if ($comment->user_id == \Auth:: user()->id) {
            $comment->content = $request->comment_content;
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
        $comment = \App\comment::find($id);
        if ($comment->user_id == \Auth::user()->id) {
            $comment->delete();
        } else {
            return response("Unauthorized", 403);
        }
        return $comment;   
    }
}
