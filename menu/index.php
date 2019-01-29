<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 29.01.2019
 * Time: 12:17
 */

$menu = array(
    array(
        'tyyp' => 'praed',
        'nimi' => 'Šnitsel',
        'hind' => 2.80
    ),
    array(
        'tyyp' => 'praed',
        'nimi' => 'Strooganov',
        'hind' => 2.40
    ),
    array(
        'tyyp' => 'supid',
        'nimi' => 'Borš',
        'hind' => 1.80
    ),
    array(
        'tyyp' => 'magustoidud',
        'nimi' => 'Tiramisu',
        'hind' => 1.30
    ),
    array(
        'tyyp' => 'joogid',
        'nimi' => 'Morss',
        'hind' => 0.30
    ),
    array(
        'tyyp' => 'joogid',
        'nimi' => 'Piim',
        'hind' => 0.20
    ),
    array(
        'tyyp' => 'joogid',
        'nimi' => 'Mahl',
        'hind' => 0.60
    ),
    array(
        'tyyp' => 'supid',
        'nimi' => 'Kapsasupp',
        'hind' => 1.65
    ),
    array(
        'tyyp' => 'magustoidud',
        'nimi' => 'Kohupiim moosiga',
        'hind' => 1.50
    ),
);


function omaHind($ale, $hind){
    return round(($ale * $hind),2);
};



function kuvaMenu($tyyp){
    global $menu;
    foreach ($menu as $roog){
        if($roog['tyyp'] === $tyyp) {
            echo '<li class="list-group-item">
                    <p>'.$roog['nimi'].' '.'<span class="badge badge-primary">'.$roog['hind'].'€</span>
                    <span class="badge badge-success">'. omaHind(0.75, $roog['hind']). '€'.'</span>
                    </p>
                </li>';
        }
    }
};

?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>sööklamenüü</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">PRAED</h1>
                <ul class="list-group">

                    <?php

                    kuvaMenu('praed');

                    ?>


                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">SUPID</h1>
                <ul class="list-group">

                    <?php

                    kuvaMenu('supid');

                    ?>


                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">MAGUSTOIDUD</h1>
                <ul class="list-group">

                    <?php

                    kuvaMenu('magustoidud');

                    ?>

                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">JOOGID</h1>
                <ul class="list-group">

                    <?php

                    kuvaMenu('joogid');

                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>

</body>

</html>