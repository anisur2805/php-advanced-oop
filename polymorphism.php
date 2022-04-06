<?php

interface Machine {
      public function calcTask();
}

class Circle implements Machine {
      private $radius;
      public function __construct($radius) {
            $this->radius = $radius;
      }

      public function calcTask() {
            return $this->radius * $this->radius * pi() . '<br/>';
      }
}

class Rectangle implements Machine {
      private $width;
      private $height;
      public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
      }
      
      public function calcTask() {
            return $this->width * $this->height . '<br/>';
      }
}

$myCircle = new Circle(3);
$myRect = new Rectangle(5,6);
// echo $myCircle->calcTask();
// echo $myRect->calcTask();