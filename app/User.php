<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
<<<<<<< HEAD
     * Get the comments for the user.
     */
=======
    * Get the comments for the user.
    */
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
<<<<<<< HEAD
     * Get the posts for the user.
     */
=======
    * Get the posts for the user.
    */
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    /**
<<<<<<< HEAD
     * Get the subbreddits the user has created.
     */
=======
    * get the subbreddits the user has created.
    */
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    public function subbreddits()
    {
        return $this->hasMany('App\Subbreddit');
    }
<<<<<<< HEAD

=======
    
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    /**
     * Get the subscribed subbreddits of the user.
     */
    public function subscribedSubbreddits()
    {
        return $this->belongsToMany('App\Subbreddit')->withTimestamps();
    }
}
<<<<<<< HEAD
=======
gtg
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
