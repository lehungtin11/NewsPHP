<?php
$mysqli = new mysqli("localhost","root","123456","qltintuc");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối MySQL lỗi " . $mysqli->connect_error;
  exit();
}
?>