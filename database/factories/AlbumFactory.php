<?php

/*
 * This function automates dummy data creation. It uses faker as a means to 
 * randomly generate said data, and, as you can see, the data created can be
 * further manipulated before it is returned. 
 */

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    $title = $faker->text(100);
    $slug = str_slug($title, "-");
    
    return [
        'slug'   => $slug,
        'artist' => $faker->name,
        'title'  => $title
    ];
});

