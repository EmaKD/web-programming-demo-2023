<?php 

require '/vendor/autoload.php'; //run autoloader

Flight::route('/', function(){ //defien route and define function to handle request
    echo 'Hello World!';
});

Flight::start(); //start FlightPHP
?>