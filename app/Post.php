<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
     /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     /**
     * Get the subbreddit that owns the post.
     */
    public function subbreddit()
    {
        return $this->belongsTo('App\Subbreddit');
    }

     /**
     * Get the comments of the subbreddit.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
=======
    /**
    * Get the user that owns the post.
    */
    public function user() 
    {
    	return $this->belongsTo('App\User');
    }

    /**
    * Get the subbreddit that owns the post.
    */
    public function subbreddit()
    {
    	return $this->belongsTo('App\Subbreddit');
    }

    /**
    * Get the comments of the post.
    */
    public function comments()
    {
    	return $this->hasMany('App\Comment');
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    }
}
