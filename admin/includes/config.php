<?php
# Konek ke Web Server Lokal
$port=54042;
$server="localhost:$port";
$myUser	= "azure";
$myPass	= "6#vWHD_$";
$myDbs	= "localdb";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>
