<?php

require_once 'Provider.php';

$provider = new Provider(__DIR__ . '/classes');
$provider->register();

$manager = new Manager();
$warden = new Warden();

$beast = $manager->createAnimal('beast', 2, true, 4);
$bird = $manager->createAnimal('bird', 2, true, 2, 2);
$fish = $manager->createAnimal(...[
    'kingdom' => 'fish',
    'eyes' => 2,
    'tail' => true,
    'gills' => 2
]);

echo var_dump($fish);

// echo var_dump($cageFish);

$cageList = new CageList();

$cageList->addCage('beast');
$cageList->addCage('fish');




// $warden->placeAnimal($fish, $cageList->getCage('fish'));

echo var_dump($cageList) . "\n";

// $warden->getAnimal($cageList, 'beast');
