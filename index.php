<?php
define('BASE_DIR', './');
require_once (BASE_DIR.'conf.php');
// loome vajalikud vaade objektid
$mainTmpl = new Template('main');
$mainTmpl->set('title', 'Menu App');
$contentTmpl = new Template('content');
require_once 'controller.php';
$mainTmpl->set('content', $contentTmpl->parse());
echo $mainTmpl->parse();

/*
////tegelikult peavad olema conf.php failis
define('BASE_DIR', './'); // define('BASE_DIR', '../');
require_once(BASE_DIR.'conf.php');

$maintmpl = new Template(main);
$contenttmpl = new Template(content);

$listtmpl = new Template('list');

$categories = array(
    array(
        'name' => 'praed',
        'icon' => 'fa-utensils',
        'data' => array(
            array(
                'name' => 'Sealihapada ploomide ja aprikoosiga',
                'description' => 'sealihapada, lisand, salat, leib',
                'price' => 2.65,
                'discount' => 2.25
            ),
            array(
                'name' => 'Praetud kanakints',
                'description' => 'praetud kana, lisand, salat, leib',
                'price' => 2.50,
                'discount' => 2.13
            )
        )
    ),

    array(
        'name' => 'supid',
        'icon' => 'fa-utensil-spoon',
        'data' => array(
            array(
                'name' => 'Rassolnik',
                'description' => 'supp, hapukoor, leib',
                'price' => 1.10,
                'discount' => 0.94
            )
        )
    )
);

$maintmpl ->set('title', 'Menu App');

foreach ($categories as $category){
    $cardtmpl = new Template(card);
    $headertmpl = new Template(header);
    $carddatatmpl =new Template(data);

    $headertmpl->set('category', $category['name']);
    $headertmpl->set('icon', $category['icon']);
    $cardtmpl->set('card_header', $headertmpl->parse());

    $carddatatmpl->set('category', $category['name']);
    $listtmpl = new Template('list');
    foreach ($category['data'] as $dish){
        foreach ($dish as $name=>$value){
            $listtmpl->set($name, $value);
        }
        $carddatatmpl->add('dish_list', $listtmpl->parse());
    }
    $cardtmpl->set('card_data', $carddatatmpl->parse());


    $contenttmpl->add('cards', $cardtmpl->parse());
}

$carddatatmpl->add(dish_list, $listtmpl->parse());

$cardtmpl ->set(card_header, $headertmpl->parse());
$cardtmpl ->set(card_data, $carddatatmpl->parse());

$contenttmpl->add('cards', $cardtmpl->parse());
$contenttmpl->add('cards', $cardtmpl->parse());
$contenttmpl->add('cards', $cardtmpl->parse());
$contenttmpl->add('cards', $cardtmpl->parse());

$maintmpl ->set('content', $contenttmpl->parse());


echo $maintmpl->parse();

//echo '<pre>';
//print_r($maintmpl);
//echo '<pre>';*/