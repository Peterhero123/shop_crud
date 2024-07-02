<?php
include 'connect.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Price: " . $row["price"] . " - Stock: " . $row["stock"] . "<br>";
    }
} else {
    echo "0 results";
}
?>
