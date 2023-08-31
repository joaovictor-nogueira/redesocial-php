<?php 
    
    session_start();
    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC','http://localhost/redesocial-php/DankiCode/Views/pages/');
    define('INCLUDE_PATH','http://localhost/redesocial-php/');


    $app = new DankiCode\Application();

    $app->run();

?>