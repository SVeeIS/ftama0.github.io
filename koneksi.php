<?php
$port=$_SERVER['WEBSITE_MYSQL_PORT'];
$server="localhost:$port";
$user="azure";
$pass="6#vWHD_$";
$db="localdb";
$pdo_conn=mysqli_connect($server,$user,$pass,$db);
if (! $pdo_conn){
echo "Failed Connection!";
}
?>
