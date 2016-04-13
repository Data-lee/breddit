<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

if (env('APP_DEBUG')) {
    // Route to view logs. Only for use in development
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
=======

>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

<<<<<<< HEAD
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // this is where our app lives -kevin 
    Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'api'], function () {
        Route::resource('subbreddits', 'SubbredditsController', [
            'only' => ['index', 'show']
        ]);

        Route::resource('posts', 'PostsController', [
            'only' => ['index', 'show']
        ]);

        Route::resource('comments', 'CommentsController', [
            'only' => ['index', 'show']
        ]);

        Route::resource('users', 'UsersController', [
            'only' => ['show']
        ]);

        Route::group(['middleware' => 'auth'], function () {
            Route::resource('subbreddits', 'SubbredditsController', [
                'only' => ['store', 'update', 'destroy']
            ]);
            Route::resource('posts', 'PostsController', [
                'only' => ['store', 'update', 'destroy']
            ]);
            Route::resource('comments', 'CommentsController', [
                'only' => ['store', 'update', 'destroy']
            ]);
        });
    });
});


=======
Route::group(['middleware' => ['web']], function () {
    Route::auth();

    // this is where our app lives
    Route::get('/', function () {
    return view('welcome');
});

Route::resource('subbreddit', 'SubbredditsController',
	['only' => ['index', 'show']]);	

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::resource('subbreddit', 'SubbredditsController',
	['except' => ['create', 'edit']]);	
});
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
