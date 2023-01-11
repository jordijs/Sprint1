<?php

    class Shape{
        //Attributes
        protected $width;
        protected $height;

        //Constructor
        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        //Getter
        public function getWidth()
        {
            return $this->width;
        }

        public function getHeight()
        {
            return $this->height;
        }

        //Setter
        public function setWidth($width)
        {
            $this->width = $width;
        }

        public function setHeight($height)
        {
            $this->height = $height;
        }

        //Methods
    }
?>