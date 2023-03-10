<?php
include "connect.php";

$sql = "SELECT * FROM table_b ORDER BY value DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Value: " . $row["value"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
