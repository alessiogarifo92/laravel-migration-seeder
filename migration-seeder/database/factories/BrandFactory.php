<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
      'name'                  => $faker ->  company,
      'brand'                 => $faker ->  firstName,
      'number_headquarters'   => $faker ->  numberBetween($min = 1, $max = 50)
    ];
});
