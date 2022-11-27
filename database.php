<?php
    include "env.php";

    $db_host = $ENV["DB_HOST"];

    // Is there any port set?
    if(strlen($ENV["DB_PORT"]) > 0){
        $db_host = $db_host . ":" . $ENV["DB_PORT"];
    }

    // MySQLi
    $conn = new mysqli($db_host, $ENV["DB_USERNAME"], $ENV["DB_PASSWORD"], $ENV["DB_DATABASE"]);

    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
?>