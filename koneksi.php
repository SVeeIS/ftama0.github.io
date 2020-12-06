<?php 
try { 
    $pdo_conn = new PDO('mysql:host=MYSQLCONNSTR_localdb;dbname=localdb', 'root', '',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
