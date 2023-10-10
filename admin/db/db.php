<?php

// Connect to the database
$servername = "foodcabin-server";
$username = "euowldbmel";
$password = "70N7T62JL66ZI20A$";
$dbname = "foodcabin";

// Create a new PDO connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

?>