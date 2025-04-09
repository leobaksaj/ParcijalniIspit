<?php 
include_once 'Math/Geometry/Circle.php';
include_once 'Math/A/Circle.php';
include_once 'Math/Constants.php';

use Math\Geometry\Circle as CircleGeometry;
use Math\A\Circle as CircleA;

$circle = new CircleGeometry(5);
echo "Promjer " .$circle->getDiameter()."<br>";
echo "Površina ".$circle->getCircumference()."<br>";
echo "Opseg kruga ".$circle->getArea()."<br>";

$circle = new CircleA(5);
echo "Promjer " .$circle->getDiameter()."<br>";
echo "Površina ".$circle->getCircumference()."<br>";
echo "Opseg kruga ".$circle->getArea()."<br>";