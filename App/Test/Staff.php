<?php
namespace App\Test;

class Staff implements UserInterface
{
      
      public function getInfo() {
            echo "This is from Staff <br/>";
      }
      
}