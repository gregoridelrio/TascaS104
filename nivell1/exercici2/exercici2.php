<?php
require_once "Shape.php";
require_once "Rectangle.php";
require_once "Triangle.php";

$rectangle = new Rectangle(5.3, 5.5);
echo $rectangle->calcularArea() . "\n";

$triangle = new Triangle(15, 14);
echo $triangle->calcularArea();
