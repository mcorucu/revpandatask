<?php
include "connect.php";

$sql = "SELECT * FROM table_a";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . " - Salary: " . $row["salary"] . " - Active: " . $row["is_active"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
