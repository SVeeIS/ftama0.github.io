<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:pemilu.database.windows.net,1433; Database = db_pemilu", "ferry", "Pemiluhmti2021");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ferry", "pwd" => "{your_password_here}", "Database" => "db_pemilu", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:pemilu.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
