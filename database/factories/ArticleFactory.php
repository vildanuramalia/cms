<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'content'=>$faker->text(),
        'title'=>$faker->sentence(),
        'featured_image'=>$faker->text()
    ];
});
