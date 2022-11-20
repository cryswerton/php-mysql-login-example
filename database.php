<?php
    include "env.php";

    // MySQLi
    $conn = new mysqli($ENV["DB_HOST"] . ":" . $ENV["DB_PORT"], $ENV["DB_USERNAME"], $ENV["DB_PASSWORD"], $ENV["DB_DATABASE"]);

    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
?>