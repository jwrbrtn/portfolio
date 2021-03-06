<?php

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function(Faker\Generator $faker){
    return [
      'featureimage' => "Hello world",
      'title' => $faker->realText($maxNbChars = 50),
      'slug' => "this-is-slug-" . str_random(10),
      'body' => $faker->realText($maxNbChars = 1000),
      'excerpt'=> $faker->realText($maxNbChars = 350)
    ];
});


$factory->define(App\Project::class, function(Faker\Generator $faker){
    return [
      'title' => $faker->realText($maxNbChars = 50),
      'slug' => "this-is-slug-" . str_random(10),
      'body' => $faker->realText($maxNbChars = 1000),
    ];
});




$factory->define(App\Message::class, function(Faker\Generator $faker){
    return [
      'email' => $faker->email,
      'name' => $faker->firstNameFemale,
      'body' => $faker->realText($maxNbChars = 1000),
    ];
});
