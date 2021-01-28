<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Headquarter;
use Faker\Generator as Faker;

$factory->define(Headquarter::class, function (Faker $faker) {
    return [
      'name'              => $faker -> company,
      'address'           => $faker -> streetAddress,
      'number_employees'  => rand(1,3000) 
    ];
});
