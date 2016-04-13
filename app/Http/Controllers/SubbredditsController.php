<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubbredditsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return \App\Subbreddit::all();
=======
       return \App\Subbreddit::all();
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
        $subbreddit = new \App\Subbreddit;
        $subbreddit->user_id = \Auth::user()->id;
        $subbreddit->name = $request->name;
        $subbreddit->description = $request->description;
<<<<<<< HEAD
=======

>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
        $subbreddit->save();

        return $subbreddit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \App\Subbreddit::with([
            'posts.comments.childComments',
            'user'
<<<<<<< HEAD
        ])->find($id);
=======
            ])->find($id);
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
        $subbreddit = \App\Subbreddit::find($id);
        if ($subbreddit->user_id == \Auth::user()->id) {
            $subbreddit->name = $request->name;
            $subbreddit->description = $request->description;
            $subbreddit->save();
        } else {
            return response("Unauthorized", 403);
        }
<<<<<<< HEAD

=======
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
        return $subbreddit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subbreddit = \App\Subbreddit::find($id);
        if ($subbreddit->user_id == \Auth::user()->id) {
            $subbreddit->delete();
        } else {
            return response("Unauthorized", 403);
        }
<<<<<<< HEAD
        return $subbreddit;
=======
        return $subbreddit;    
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    }
}
