<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
  if ($conn->query($sql) === TRUE) {
    echo "สำเร็จ";
  } else {
    echo "เฟล: " . $conn->error;
  }
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="id">ID ที่ต้องการอัปเดต: </label><br>
  <input type="text" id="id" name="id"><br>
  <label for="name">ชื่อ:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">อีเมล: </label><br>
  <input type="text" id="email" name="email"><br>
  <label for="phone"> โทรศัพท์: </label><br>
  <input type="text" id="phone" name="phone"><br><br>
  <input type="submit" value="อัปเดต">
</form>
