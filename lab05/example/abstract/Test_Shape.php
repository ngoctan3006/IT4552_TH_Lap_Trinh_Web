<?php
include_once "Rectangle.php";
include_once "Triangle.php";
include_once "Circle.php";
include_once "Color.php";
include_once "Shape.php";

$myCollection = array();

// make a rectangle
$r = new Rectangle;
$r->width = 5;
$r->height = 7;
$myCollection[] = $r;
unset($r);

// make a triangle
$t = new Triangle;
$t->base = 4;
$t->height = 5;
$myCollection[] = $t;
unset($t);

//make a circle
$c = new Circle;
$c->radius = 3;
$myCollection[] = $c;
unset($c);

//make a color
$c = new Color;
$c->name = "blue";
$myCollection[] = $c;
unset($c);

foreach ($myCollection as $s) {
    if ($s instanceof Shape) 
    {
        print("Area: " . $s->getArea() . "\n");
    }

    if($s instanceof Polygon) 
    {
        print("Sides: " .$s->getNumberOfSides() . "\n");
    }

    if($s instanceof Color) 
    {
        print("Color: $s->name\n");
    }

    print("\n");
}
?>