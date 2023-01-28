<?php
    define('DB_HOST','localhost');
    define('DB_USER','aymen');
    define('DB_PASS','19960807');
    define('DB_NAME','users');
    
    $connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($connection -> connect_error){
        die('Connection Failed' . $connection -> connect_error);
    }

    // echo 'Connected'
?>