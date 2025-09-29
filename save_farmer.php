<?php
include "config.php";

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "INSERT INTO farmers (name, age, address, phone) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siss", $name, $age, $address, $phone);

if ($stmt->execute()) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย ✅');window.location='track.html';</script>";
} else {
    echo "Error: " . $conn->error;
}
$stmt->close();
$conn->close();
?>
