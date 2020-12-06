<?php
$port = $_SERVER['54042'];
$server	= "localhost:$port";
$user	= "azure";
$password	= "6#vWHD_$";
$db	= "localdb";

try { 
    $pdo_conn = new PDO('mysql:host=$server;dbname=$db', '$user', '$password',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
