<?php
$port = $_SERVER['WEBSITE_MYSQL_PORT'];
$myHost	= "localhost:$port";
$myUser	= "azure";
$myPass	= "6#vWHD_$";
$myDbs	= "localdb";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>
