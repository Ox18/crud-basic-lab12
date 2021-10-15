<?php

	$servername = "localhost";
    $database = "appservicios";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    function getConnexion(){
        global $conn;
        return $conn;
    }
?>