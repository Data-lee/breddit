<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
    * Get the user that owns the comment.
    */
<<<<<<< HEAD
   public function user()
   {
       return $this->belongsTo('App\User');
   }
=======
    public function user() 
    {
    	return $this->belongsTo('App\User');
    }
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5

    /**
    * Get the post that owns the comment.
    */
<<<<<<< HEAD
   public function post()
   {
       return $this->belongsTo('App\Post');
   }

    /**
    * Get the parent comment that owns the comment.
    */
   public function parentComment()
   {
       return $this->belongsTo('App\Comment');
   }

    /**
    * Get the child comments owned by the comment.
    */
   public function childComments()
   {
       return $this->hasMany('App\Comment');
   }
=======
    public function post() 
    {
    	return $this->belongsTo('App\Post');
    }
    
    /**
    * Get the parent comment that owns the comment.
    */
    public function parentComment()
    {
    	return $this->belongsTo('App\Comment');
    }

    /**
    * Get the child comments owned by comment.
    */
    public function childComments() 
    {
    	return $this->hasMany('App\Comment');
    }
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
}
