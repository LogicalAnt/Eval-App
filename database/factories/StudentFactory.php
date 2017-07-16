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

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    $faker->addProvider(new \Faker\Provider\en_US\Person($faker));
    $faker->addProvider(new \Faker\Provider\Base($faker));
    $faker->addProvider(new \Faker\Provider\Internet($faker));

    return [
        'name' => $faker->name,
        'email' =>$faker->safeEmail,
        's_id' =>$faker->numberBetween(2010, 2017) . "0" .
            $faker->numberBetween(0,2) . '00000' .
            $faker->numberBetween(0, 99),
        'batch' =>$faker-> numberBetween(25,45),
        'password' =>str_random(6),
    ];
});
