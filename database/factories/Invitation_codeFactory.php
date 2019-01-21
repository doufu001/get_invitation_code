<?php

use Faker\Generator as Faker;

$factory->define(App\Invitation_code::class, function (Faker $faker) {
    return [
        'invitation_code' =>$faker->password(20)
    ];
});
