<?php
include_once "Shape.php";
abstract class Polygon extends Shape
{
    abstract function getNumberOfSides();
}