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
        // creo 3 imagnes aleatorias bien con public/storage...jpg
        // 'image' => $faker-> image('public/storage', 640,480, null),
        // creo 6 imagenes aleatorias bien con public/storage...jpg
        // 'image' => $faker->image('public/storage',$width =640, $height=480),
        // creo 7 imagenes aleatorias 3 bien, con public/storage...jpg
        // 'image' => $faker->image('public/storage',640,480),
        // creo 3 imagenes de gatos con j2a8Upv1..jpg
        // 'image' => $faker->image('public/storage',640,480,'cats',false),
        // creo 6 imagenes aleatorias 3 bien con 2j4ijf7...jpg
        'image' => $faker->image('public/storage',640,480,false,false),
        // creo 4 imagenes de gatos con public/storage...jpg
        // 'image' => $faker->image('public/storage',640,480,'cats'),
        // creo 8 imagenes 6 bien al toke con public/storage...jpg
        // 'image' => $faker->image('public/storage', 640,480,false),
        // creo 6 imagenes 3 bien con public/storage...jpg
        // 'image' => $faker->image('public/storage', 640,480),
        'visible' => 1,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
        'category_id' => rand(1,2),
    ];
});
