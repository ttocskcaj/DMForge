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
    return [
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
    ];
});
$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->text(1000),
        'user_id' => rand(1,2),
    ];
});
