<?php
$myHost	= "localhost";
$myUser	= "azure";
$myPass	= "6#vWHD_$";
$myDbs	= "localdb";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>
