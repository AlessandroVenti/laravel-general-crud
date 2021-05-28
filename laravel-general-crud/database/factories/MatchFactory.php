<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\MyMatch;

$factory->define(MyMatch::class, function (Faker $faker) {
    return [
        'team1' => $faker -> firstName,
        'team2' => $faker -> lastName,
        'point1' => $faker -> numberBetween(1, 5),
        'point2' => $faker -> numberBetween(1, 5),
        'result' => rand(0, 1) == 0,
    ];
});
