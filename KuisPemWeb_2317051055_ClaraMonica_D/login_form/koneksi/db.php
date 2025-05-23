<?php
    $id = "localhost";
    $username = "root";
    $password = " ";
    $db = "kuis2";
    
    $mysqli = mysqli_connect ($id, $username, $password, $db );

    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());}
    echo "Connected successfully";

?>

    