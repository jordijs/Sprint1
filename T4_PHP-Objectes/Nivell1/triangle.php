<?php
    require_once "shape.php";

    class Triangle extends Shape{
        
        //Methods
        public function calculateArea()
        {
            $this->area = (($this->width) * ($this->height)) / 2;
            return $this->area;
        }
    }
?>