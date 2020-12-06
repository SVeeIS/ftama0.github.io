<?php
# Konek ke Web Server Lokal
$server="localhost:54042";
$myUser	= "azure";
$myPass	= "6#vWHD_$";
$myDbs	= "localdb";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>
