<?php
$port=54042;
$server="localhost:$port";
$user="azure";
$pass="6#vWHD_$";
$db="localdb";

$pdo_conn = mysqli_connect("$server","$user","$pass","$db");

// Check connection
if ($pdo_conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $pdo_conn -> connect_error;
  exit();
}

?>

