<?php
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$shapes[0] = new Circle('Circle',3);
$shapes[1] = new Rectangle('rectangle',10,5);
$shapes[2] = new Square('square',10);

foreach ($shapes as $shape){
    echo "dien tich ".$shape->name." truoc khi tang: ". $shape->calculateArea(). "<br>";
    echo "dien tich ".$shape->name ." sau khi tang: ".$shape->resize(50)."<br>";
}
//echo "dien tich hinh tron truoc khi tang: ". $shape[0]->calculateArea(). "<br>";
////echo 'Circle perimeter: ' . $circle->calculatePerimeter(). "<br>";
//echo "dien tich hinh tron sau khi tang: ".$shape[0]->resize(50)."<br>";
//
////$cylinder = new Cylinder('Cylinder 01',3,4);
////echo 'Cylinder area: ' . $cylinder->calculateArea(). "<br>";
////echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter(). "<br>";
////echo $cylinder->calculateVolume()."<br>";
//
//echo "dien tich hinh chu nhat truoc khi tang: ".$shape[1]->calculateArea()."<br>";
//echo "dien tich hinh chu nhat sau khi tang: ".$shape[1]->resize(50)."<br>";