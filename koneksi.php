<?php 
try { 
    $pdo_conn = new PDO('mysql:host=https://hmti.scm.azurewebsites.net/;dbname=pemilu', 'root', '',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
