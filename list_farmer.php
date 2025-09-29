<?php
include "config.php";

$sql = "SELECT * FROM farmers ORDER BY id DESC";
$result = $conn->query($sql);

$farmers = [];
while ($row = $result->fetch_assoc()) {
  $farmers[] = $row;
}

echo json_encode($farmers);
$conn->close();
?>
