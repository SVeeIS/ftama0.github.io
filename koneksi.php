<?php
$port=$_SERVER['WEBSITE_MYSQL_PORT'];
$server="localhost:$port";
$user="azure";
$pass="6#vWHD_$";
$db="localdb";

$mysqli = new mysqli("$server","$user","$pass","$db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli) {
  echo "Koneksi berhasil!";
  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>

