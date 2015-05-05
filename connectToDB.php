<?php
    $servername = "localhost";
    $db = 'teedb2';
    $username = 'root';
    $password = '261994akk';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>