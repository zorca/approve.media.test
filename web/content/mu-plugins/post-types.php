<?php

// Import PostTypes
use PostTypes\PostType;
use PostTypes\Taxonomy;

// Create a Realty PostType
$people = new PostType(
    [
        'name' => 'realty',
        'singular' => 'Недвижимость',
        'plural' => 'Недвижимость',
        'slug' => 'realty'
    ],
    [
        'capability_type'    => 'post',
        'supports' => ['title','editor','thumbnail'],
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-multisite',
        'rewrite' => ['with_front' => false]
    ]
);

$people->register();

// Create a new taxonomy
$genres = new Taxonomy([
    'name' => 'realty-type',
    'singular' => 'Тип недвижимости',
    'plural' => 'Типы недвижимости',
    'slug' => 'realty-type'
]);

$genres->posttype('realty');

$genres->register();
