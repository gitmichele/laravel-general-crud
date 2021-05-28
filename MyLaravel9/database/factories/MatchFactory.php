<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Match;

$factory->define(Match::class, function (Faker $faker) {
    return [
        'team1' => $faker -> city,
        'team2' => $faker -> city,
        'score1' => $faker -> numberBetween(50, 100),
        'score2' => $faker -> numberBetween(50, 100),
    ];
});
