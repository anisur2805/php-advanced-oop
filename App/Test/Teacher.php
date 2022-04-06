<?php 
namespace App\Test;

class Teacher implements UserInterface
{

      public function getInfo() {
            echo "This is from Teacher <br/>";
      }
      
}