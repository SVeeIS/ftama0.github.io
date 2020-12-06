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

// Perform query
if ($result = $pdo_conn -> query("SELECT no_urut FROM vote")) {
  $row = $result->fetch_row();
  echo "<h1>$row[0]</h1>";
  // Free result set
  $result -> free_result();
}

$pdo_conn -> close();
?>
