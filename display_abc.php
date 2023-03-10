<?php
include "connect.php";

// Display table_a
$sql = "SELECT * FROM table_a";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Table A</h2>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . " - Salary: " . $row["salary"] . " - Active: " . $row["is_active"] . "<br>";
    }
} else {
    echo "0 results";
}

// Display table_b
$sql = "SELECT * FROM table_b";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Table B</h2>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Value: " . $row["value"] . "<br>";
    }
} else {
    echo "0 results";
}

// Display table_c
$sql = "SELECT * FROM table_c";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Table C</h2>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $
