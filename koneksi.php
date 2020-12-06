<?php 
try { 
    $pdo_conn = new PDO('mysql:host=https://hmti.azurewebsites.net;dbname=pemilu', 'root', 'Pemiluhmti2021',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
