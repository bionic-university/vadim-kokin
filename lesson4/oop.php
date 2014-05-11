<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 4/28/14
 * Time: 7:06 PM
 */
include 'classes/Circle.php';

$circle1 = new Circle('red', 'wood', 15,5);
var_dump($circle1);
$circle2 = new Circle('red', 'wood', 12,5);
var_dump($circle2);

$circle2->setRadius(15);
echo $circle2->getRadius();