<?php
$sql = 'SELECT * FROM dish_types';
$categories = $db->getData($sql);
foreach ($categories as $category){
    $cardTmpl = new Template('card');
    $cardHeaderTmpl = new Template('header');
    $cardDataTmpl = new Template('data');

    $cardHeaderTmpl->set('category', $category['type_name']);
    $cardHeaderTmpl->set('icon', $category['type_icon']);
    $cardTmpl->set('card_header', $cardHeaderTmpl->parse());

    $cardDataTmpl->set('category', $category['type_name']);


    $sql = 'SELECT * FROM dishes WHERE type_id='.fixDb($category['type_id']);
    $category['data'] = $db->getData($sql);


    $listTmpl = new Template('list');
    foreach ($category['data'] as $dish){
        foreach ($dish as $name=>$value){
            $listTmpl->set($name, $value);
        }
        $cardDataTmpl->add('dish_list', $listTmpl->parse());
    }
    $cardTmpl->set('card_data', $cardDataTmpl->parse());
    $contentTmpl->add('cards', $cardTmpl->parse());
}