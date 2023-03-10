<?php
$servername = "localhost";
$username = "u0879582_revpandatask";
$password = "Cyk4~ry]3,rt";
$dbname = "u0879582_revpandatask";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
