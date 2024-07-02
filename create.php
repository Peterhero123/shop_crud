<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

  if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลเรียบร้อยแล้ว";
  } else {
    echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $conn->error;
  }
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="name">ชื่อ:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">อีเมล: </label><br>
  <input type="text" id="email" name="email"><br>
  <label for="phone"> โทรศัพท์ : </label><br>
  <input type="text" id="phone" name="phone"><br><br>
  <input type="submit" value="บันทึก">
</form>
