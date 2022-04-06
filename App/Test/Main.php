<?php

namespace App\Test;

class Main 
{
      
      public $object;
      
      public function __construct( UserInterface $userObj ) {
            $this->object = $userObj;
      }
      
      public function display() {
            $this->object->getInfo();
      }
      
      
}