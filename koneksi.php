<?php
$server="localhost";
$user="azure";
$password="6#vWHD_$";
$db	= "pemilu";

try { 
    $pdo_conn = new PDO('mysql:host=$server;dbname=$db', '$user', '$password',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
