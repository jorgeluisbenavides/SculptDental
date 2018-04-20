<?php

use Faker\Generator as Faker;

$factory->define(App\Doctor::class, function (Faker $faker) {

    $name           = $faker->name;
    $lastname_one   = $faker->lastname;
    $lastname_two   = $faker->lastname;
    $full_name      = $lastname_one . ' ' . $lastname_two . ' ' . $name;

    return [
        'name'                  => $name,
        'last_name_one'         => $lastname_one,
        'last_name_two'         => $lastname_two,
        'full_name'             => $full_name,
        'speciality'            => $faker->jobTitle,
        'professional_license'  => $faker->text(10),
        'graduate_university'   => $faker->text(10),
        'sex'                   => $faker->randomElement(['MALE','FEMALE']),
        'cell_phone'            => $faker->tollFreePhoneNumber, //crea dato aleatorio
        'home_phone'            => $faker->tollFreePhoneNumber, //crea dato aleatorio
        'type'                  => $faker->randomElement(['Doctor','Asistente']),
        'img_name'              => $faker->imageUrl($width = 1200, $height=400),
    ];
});
