<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shop_crud";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("ล้มเหลว: " . $conn->connect_error);
}
echo "สำเร็จ";
?>
