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

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    $faker->addProvider(new \Faker\Provider\en_US\Person($faker));
    $faker->addProvider(new \Faker\Provider\Base($faker));

    return [
        'name' => $faker->randomElement($array = array('Computer Architecture',
                                                        'Programming Language 1',
                                                        'Operating System')),
        'course_code' =>$faker->randomElement($array = array ('CSE', 'EEE', 'BBA', 'ACT')).
                        $faker->numberBetween(1000,4050),
    ];
});
