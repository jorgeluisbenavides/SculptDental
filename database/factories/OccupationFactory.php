<?php

use Faker\Generator as Faker;

use App\Occupation;

$factory->define(Occupation::class, function (Faker $faker) {
	$title = $faker->sentence(4); //sentence:oracion, de 4 palabras
    return [
        'title' => $faker->text(10),
    ];
});
