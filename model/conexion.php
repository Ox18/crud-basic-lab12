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

    $pdo;
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=$database", "root", "");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch(PDOException $e) {
        die("ERROR: Could not connect. ".$e->getMessage());
     }



?>