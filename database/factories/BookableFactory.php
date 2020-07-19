<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

// NEED THE 'USE' STATEMENT TO BE ABLE TO ACCESS THIS ARRAY
$suffix = [

	'Villa',
	'House',
	'Cottage',
	'Luxury Villas',
	'Cheap House',
	'Rooms',
	'Cheap Rooms',
	'Luxury Rooms',
	'Fancy Rooms'
];

$factory->define(Bookable::class, function (Faker $faker) use($suffix) {
    return [
        'title' => $faker->city . ' ' . Arr::random($suffix), 
        'description' => $faker->text(), 
    ];
});
