<?php
require_once("koneksi.php");
session_name("verify");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $pdo_conn->prepare('SELECT * FROM user WHERE nim_user = :nim and password = :pass');
$admin->execute(array(
                  ':nim' => $_POST['nim'],
                  ':pass' => $_POST['password']
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
if($_POST['nim'] == 'admin' && $_POST['password'] == 'admin')
{
    $_SESSION['login_admin'] = 'ADMIN';
    header("location: admin/index.php");
}
else if(empty($row['nim_user']))
{
    echo '<script type="text/javascript">'; 
    echo 'alert("NIM atau password yang Anda masukan SALAH");'; 
    echo 'window.location.href = "login.html";';
    echo '</script>';
}
else 
{
    $_SESSION['login_user'] = $_POST['nim'];
    header("location: beranda.php");
}
}
?>