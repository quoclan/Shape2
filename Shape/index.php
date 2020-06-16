<?php 
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
$circle = new Circle (3,'circle1');
echo 'Circle area :' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
$cylinder = new Cylinder ("cylinder1",4,5);
echo 'C ylinder area:' . $cylinder->calculateArea() . '<br/>';
echo 'Cylinder perimeter:' . $cylinder->calculatePerimeter() . '<br/>';  
?>  