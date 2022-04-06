<?php
require 'vendor/autoload.php';

use App\Test\Main;
use App\Test\Student;
use App\Test\Teacher;

$std = new Student;
$teacher = new Teacher;

$main = new Main( $teacher );
$main->display();