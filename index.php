<?php
//328/howdy/index.php
//This represents as the controller

//Turn on reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// Require the autoload file
require('vendor/autoload.php');

// Create F3 base class
$F3 = Base::instance();

// Define default route
$F3->route('GET /', function(){
    $view = new Template();
    echo $view->render('view/home.html');
});

$F3->run();