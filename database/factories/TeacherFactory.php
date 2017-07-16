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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Teacher::class, function (Faker\Generator $faker) {
    $faker->addProvider(new \Faker\Provider\en_US\Person($faker));
    $faker->addProvider(new \Faker\Provider\Base($faker));
    $faker->addProvider(new \Faker\Provider\Internet($faker));

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'code_name' =>$faker->unique()->word,
        'designation' =>$faker
                        ->randomElement($array = array('Lecturer', 'Professor', 'Asst. Prof', 'PT faculty')),
        'password' =>str_random(6),
    ];
});
