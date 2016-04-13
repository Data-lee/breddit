<<<<<<< HEAD
<?php

use Illuminate\Database\Seeder;

=======

<?php
use Illuminate\Database\Seeder;
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function($user) {
            $user->subbreddits()->save(factory(App\Subbreddit::class)->make());
<<<<<<< HEAD

            $user->posts()->save(factory(App\Post::class)->make([
                'subbreddit_id' => rand(1,App\Subbreddit::all()->count())
            ]));

            $user->comments()->save(factory(App\Comment::class)->make([
                'post_id' => rand(1,App\Post::all()->count())
            ]));

            $user->comments()->save(factory(App\Comment::class)->make([
                'comment_id' => rand(1,App\Comment::all()->count())
            ]));

=======
            $user->posts()->save(factory(App\Post::class)->make([
                'subbreddit_id' => rand(1,App\Subbreddit::all()->count())
            ]));
            $user->comments()->save(factory(App\Comment::class)->make([
                'post_id' => rand(1,App\Post::all()->count())
            ]));
            $user->comments()->save(factory(App\Comment::class)->make([
                'comment_id' => rand(1,App\Comment::all()->count())
            ]));
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
            $user->subscribedSubbreddits()->attach(rand(1,App\Subbreddit::all()->count()));
        });
    }
}
