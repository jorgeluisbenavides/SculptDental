<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {

    $name           = $faker->name;
    $lastname_one   = $faker->lastname;
    $lastname_two   = $faker->lastname;
    $full_name      = $lastname_one . ' ' . $lastname_two . ' ' . $name;

    return [
        'folio'         => rand(400000,500000),
        'name'          => $name,
        'last_name_one' => $lastname_one,
        'last_name_two' => $lastname_two,
        'full_name'     => $full_name,
        'address'       => $faker->streetAddress,
        'references'    => $faker->address,
        'age'           => rand(1,99),
        'cell_phone'    => $faker->tollFreePhoneNumber,
        'home_phone'    => $faker->tollFreePhoneNumber,
        'sex'           => $faker->randomElement(['Masculino','Femenino']),
        'civil_state'   => $faker->randomElement(['Soltero','Casado','Viudo']),
        'img_name'      => $faker->imageUrl($width = 400, $height=400),
        'status'        => $faker->randomElement(['Activo','Inactivo']),    
        'occupation_id' => rand(1,3),
    ];

});