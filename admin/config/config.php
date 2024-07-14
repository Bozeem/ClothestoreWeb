<?php
$mysqli = new mysqli("localhost","root","","clothestore");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối mysqli " . $mysqli->connect_error;
  exit();
}
?>