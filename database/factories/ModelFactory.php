<?php
<<<<<<< HEAD

=======
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
<<<<<<< HEAD

=======
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
<<<<<<< HEAD

$factory->define(App\Subbreddit::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->text
=======
$factory->define(App\Subbreddit::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->realText($maxNbChars = 140, $indexSize = 2)
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    ];
});
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->url,
<<<<<<< HEAD
        'title' => $faker->sentence,
        'post_content' => $faker->text
=======
        'title' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2)
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    ];
});
$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
<<<<<<< HEAD
        'comment_content' => $faker->text,
    ];
});
=======
        'content' => $faker->realText($maxNbChars = 300, $indexSize = 2),
    ];
});
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
