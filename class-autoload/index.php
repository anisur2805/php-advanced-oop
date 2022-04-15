<?php

spl_autoload_register(function( $className ) {
    echo "I am looking for Class:: $className <br/>";
    if( file_exists( "inc/".$className.".php" ) ) {
        include "inc/".$className.".php"; 
    } else {
        throw new Exception("Could not found the Class: ". $className);
    }

});

try{
$obj = new One();
// $obj->show();

$obj2 = new Two();
// $obj2->show();
$obj3 = new Three();
$obj3 = new Four();
// $obj3->show();
} catch( Exception $e ) {
   echo $e->getMessage();
}