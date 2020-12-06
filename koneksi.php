<?php 
try { 
    $pdo_conn = new PDO('mysql:host=localhost;dbname=localdb', 'root', 'MYSQLCONNSTR_localdb',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
