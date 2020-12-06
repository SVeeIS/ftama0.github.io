<?php 
try { 
    $pdo_conn = new PDO('mysql:host=localhost;dbname=localdb', 'root', 'Pemiluhmti2021',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
