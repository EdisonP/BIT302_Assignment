<?php
$dbhost = "localhost";
$dbname = "jucommunity";
$dbpass = "";
$dbuser = "root";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>