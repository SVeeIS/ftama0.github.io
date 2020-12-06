<?php
$port = $_SERVER['WEBSITE_MYSQL_PORT'];
$server	= "localhost:$port";
$user	= "azure";
$password	= "6#vWHD_$";
$db	= "localdb";

$pdo_conn = new mysqli("$server","$user","$password","$db");

// Check connection
if ($pdo_conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $pdo_conn -> connect_error;
  exit();
}

if (! $koneksidb) {
  echo "Failed Connection !";
}
?>
