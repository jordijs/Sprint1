<?php
    require_once "shape.php";

    class Rectangle extends Shape{
        
        //Methods
        public function calculateArea()
        {
            $this->area = ($this->width) * ($this->height);
            return $this->area;
        }
    }
?>