<?php
namespace App;


class School
{
      private static $teacher = NULL;
      private static $student = NULL;
      
      private function __construct() {
            echo "Hello ". __NAMESPACE__;
      }
      
      public static function teacher() {
            if( self::$teacher == NULL ) {
                  self::$teacher = new Teacher;
            }
            return self::$teacher;
      }
      
      public static function student() {
            if( self::$student == NULL ) {
                  self::$student = new Student;
            }
            return self::$student;
      }
      
}