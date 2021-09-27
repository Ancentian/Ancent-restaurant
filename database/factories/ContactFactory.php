<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'email' => $faker->unique()->safeEmail,
        'phonenumber' => $faker->numerify('+###-#########'),
        'subject' => $faker->sentence(2),
        'message' => $faker->paragraph(5),
    ];
});
