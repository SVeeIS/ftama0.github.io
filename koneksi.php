<?php
$port = $_SERVER['WEBSITE_MYSQL_PORT'];
$server	= "localhost:$port";
$user	= "azure";
$password	= "6#vWHD_$";
$db	= "localdb";

$mysqli = new mysqli("$server","$user","$password","$db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT no_urut FROM vote")) {
  $row = $result->fetch_row();
  echo "<h1>$row[0]</h1>";
  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>
