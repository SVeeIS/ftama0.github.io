<?php
$port=$_SERVER['WEBSITE_MYSQL_PORT'];
$server	= "localhost:$port";
$user="azure";
$pass="6#vWHD_$";
$db="localdb";
$koneksidb = mysqli_connect( $server, $user, $pass, $db);
if (! $koneksidb) {
  echo "Failed Connection !";
}
?>
