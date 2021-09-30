<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Todo;
use Faker\Generator as Faker;

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [

        'name'=>$faker->name,
        'descrpation'=>$faker->paragraph(3),
        'compeleltd'=>$faker->boolean()
    ];
});
