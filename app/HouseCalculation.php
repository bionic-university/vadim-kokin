<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 4/29/14
 * Time: 12:38 PM
 */

include __DIR__.'/../src/BionicUniversity/VadimKokin/House/House.php';
include __DIR__.'/../src/BionicUniversity/VadimKokin/House/Wall.php';
include __DIR__.'/../src/BionicUniversity/VadimKokin/House/Window.php';
include __DIR__.'/../src/BionicUniversity/VadimKokin/House/Level.php';
include __DIR__.'/../src/BionicUniversity/VadimKokin/House/Roof.php';


echo 'this part is OK';
$roof = new Roof('wood', 5);

//$walls =   [new Wall('wood', 15, 10), new Wall('wood', 15, 10), new Wall('stone', 10, 10), new Wall('stone', 10, 10)];
$wall = new Wall('wood', 15, 10);
//$windows = [];

//for($i=0; $i<10; $i++){
//    $windows[$i] = new Window('plastic');
//}
//$levels = [];
//for($i=0; $i<5; $i++) {
//    $levels[$i] = new Level(5, $walls, $windows);
//}
$window = new Window('plastic');
$level = new Level(5, $wall, $window);
$house = new House($level, 5, $roof);

echo 'Our building is ' . $house->calcTotalHeight() . 'm height. The conner of the roof is ' .
$house->calcRoofConner() . ' deg. Our house is build from ' . $house->selectMaterial() . '.';


