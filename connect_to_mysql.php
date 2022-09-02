<?php
$servername = "localhost";
$username = "owancato";
$password = "DL4Iy1hTI47eRZi0";
$database = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
