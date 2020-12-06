<?php
# Konek ke Web Server Lokal
$myHost="localhost:54042";
$myUser	= "azure";
$myPass	= "6#vWHD_$";
$myDbs	= "pemilu";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>
