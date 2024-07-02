<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
  echo "ลบข้อมูลเรียบร้อยแล้ว";
} else {
  echo "เกิดข้อผิดพลาด: " . $conn->error;
}
?>
