<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Appointment;
use Faker\Generator as Faker;


$factory->define(App\Default::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'name' => $faker->name,
        'slot' => $faker->randomElement($array = array ('08','09','10','11','12','13','14')), //
        'date' => $randomDate
        ];
});
