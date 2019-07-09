<?php

// Realty Post Type Fields
use StoutLogic\AcfBuilder\FieldsBuilder;

$realty = new FieldsBuilder('realty_properties', ['key' => 'realty_properties', 'title' => 'Свойства недвижимости']);
$realty
    ->addText('realty_properties__address', ['key' => 'realty_properties__address', 'label' => 'Адрес'])
    ->addNumber('realty_properties__floor', ['key' => 'realty_properties__floor', 'label' => 'Этаж'])
    ->addNumber('realty_properties__plottage', ['key' => 'realty_properties__plottage', 'label' => 'Площадь'])
    ->addNumber('realty_properties__live_plottage', ['key' => 'realty_properties__live_plottage', 'label' => 'Жилая площадь'])
    ->addNumber('realty_properties__price', ['key' => 'realty_properties__price', 'label' => 'Стоимость'])
    ->setLocation('post_type', '==', 'realty');

add_action('acf/init', function() use ($realty) {
    acf_add_local_field_group($realty->build());
});
