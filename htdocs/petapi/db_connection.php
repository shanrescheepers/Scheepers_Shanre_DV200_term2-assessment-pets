<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "pets";


$conn = new mysqli($dbhost, $dbusername, $dbpassword , $dbname);

    if($mysqli -> connect_errno){
        echo 'Failed to connect to DB: ' . $mysqli -> connect_error;
        exit();
    }

?>