<?php
namespace App\Test;

class Student implements UserInterface
{
      
      public function getInfo() {
            echo "This is from Student <br/>";
      }
      
}