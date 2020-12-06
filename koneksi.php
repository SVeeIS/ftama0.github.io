<?php 
try { 
    $pdo_conn = new PDO('mysql:host=localhost;dbname=MYSQLCONNSTR_localdb', 'azure', 'Pemiluhmti2021',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
