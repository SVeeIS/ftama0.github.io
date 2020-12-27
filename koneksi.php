<?php 
try { 
    $pdo_conn = new PDO('mysql:host=localhost:50996;dbname=pemilu', 'azure', '6#vWHD_$',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
