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
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Authors::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\Categories::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement(array('Triller', 'Fantasy', 'Sci-Fi')),
    ];
});

$factory->define(App\Models\Publishers::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
    ];
});

$factory->define(App\Models\Books::class, function (Faker\Generator $faker) {

    return [
        'title' => 'book '.$faker->randomElement(range(1,10)),
        'description' => $faker->paragraph,
        'publish_date' => $faker->date(),
        'author_id' => random_int(\DB::table('authors')->min('id'), \DB::table('authors')->max('id')),
        'category_id' => random_int(\DB::table('categories')->min('id'), \DB::table('categories')->max('id')),
        'publisher_id' => random_int(\DB::table('publishers')->min('id'), \DB::table('publishers')->max('id')),
    ];
});


