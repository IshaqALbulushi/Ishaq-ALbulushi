<?php

include_once 'circle.php';
include_once 'triangle.php';
include_once 'sq.php';
include_once 'rectangle.php';

$circle= new Circles();
$circle->radius=10.50;
$circle->calculate();



$triangle= new triangle();
$triangle-> base=14;
$triangle-> height=7;
$triangle-> a=14;
$triangle-> b=9;
$triangle-> c=11;
$triangle->calculate();



$sq= new sq();
$sq-> base=14;
$sq->calculate();



$rectangle= new rectangle();
$rectangle->length=17;
$rectangle->width=4;
$rectangle->calculate();


?>