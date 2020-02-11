<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {

  $name = $faker->name();
  $slug = str_slug($name, '-');
    return [
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->paragraph,
        'extract' => $faker->text,
        'price' => $faker->randomFloat($nbMaxDecimals=2, $min=1000, $max=3000),
        // 'image' => $faker-> image('public/storage', 640,480, null, false),
        // 'image' => $faker->image('public/storage',$width =640, $height=480),
        // 'image' => $faker->image('public/storage',640,480),
        'image' => $faker->image('public/storage',640,480,'cats'),
        'visible' => 1,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
        'category_id' => rand(1,2),
    ];
});
