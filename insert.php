<?php
include "connect.php";

$table_a = $_POST['table_a'];
$table_b = $_POST['table_b'];
$table_c = $_POST['table_c'];

// Insert values into table_a
$sql = "INSERT INTO table_a (name, age, salary, is_active) VALUES ('$table_a', 30, 50000.00, true)";
$conn->query($sql);

// Insert values into table_b
$sql = "INSERT INTO table_b (value) VALUES ('$table_b')";
$conn->query($sql);

// Insert values into table_c
$sql = "INSERT INTO table_c (name, age, salary, is_active) VALUES ('$table_c', 25, 45000.00, false)";
$conn->query($sql);

$conn->close();
?>
