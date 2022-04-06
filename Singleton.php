<?php 

class User {
      public static $numberOfIns = 0;
      private static $instance = NULL;
      
      private function __construct() {
            self::$numberOfIns += 1;
      }
      
      public static function display() :User {
            // this will print the exact numbers how many times we call this method 
            echo "Hello world <br/>"; 
            // normal way 
            // return new self();
            
            /* singleton way
                  only once create the object 
            */
            if(self::$instance == null ) {
                  self::$instance = new User;
            }
            
            return self::$instance;
      }
      
}

user::display();
user::display();
user::display();
user::display();
user::display();
user::display();
echo "Total instance created ". User::$numberOfIns;