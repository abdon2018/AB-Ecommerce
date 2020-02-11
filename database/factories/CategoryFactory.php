<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {

  $name = $faker->sentence;
  $slug = str_slug($name, '-');

    return [
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->paragraph,
        'color' => $faker->colorName,
    ];
});
