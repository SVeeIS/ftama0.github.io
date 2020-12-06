<?php 
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "pemilu"); /* misalnya nama database saya db_azurems */

$conn = mysql_connect(HOSTNAME, USERNAME, PASSWORD)
  or die ("Error saat menghubungkan ke host database");
$db = mysql_select_db(DBNAME)
  or die ("Error saat menghubungkan ke database");
?>
