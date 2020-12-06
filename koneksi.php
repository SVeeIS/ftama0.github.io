<?php 
try { 
    $pdo_conn = new PDO('mysql:host=localhost;dbname=127.0.0.1', 'root', '',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
