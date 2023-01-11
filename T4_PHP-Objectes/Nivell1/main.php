<?php
    require_once "triangle.php";
    require_once "rectangle.php";

    $triangle1 = new Triangle(123, 45);
    $rectangle1 = new Rectangle(65, 43);
    
    echo "Triangle1: " . $triangle1->calculateArea();
    echo "<br/>";
    echo "Rectangle1: " . $rectangle1->calculateArea();
?>