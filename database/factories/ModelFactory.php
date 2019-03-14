<?php

use Illuminate\Support\Arr;

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

$factory->define(Furbook\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Furbook\Breed::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->lastName
    ];
});

$factory->define(Furbook\Cat::class, function(Faker\Generator $faker) {
    $breed_ids = Furbook\Breed::all();
    return [
        'name' => $faker->firstName,
        'date_of_birth' => $faker->date,
        'breed_id' => $breed_ids[rand(0, $breed_ids->count() - 1)]->id
    ];
});
