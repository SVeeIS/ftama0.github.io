<?php
    require_once("koneksi.php");
    $nim = $_GET['nim'];
    $ambildata=$pdo_conn->prepare("SELECT * from user WHERE nim_user=".$nim);
    $ambildata->execute();
    $user = $ambildata->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Akun</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="Logo/HMTI2020.png">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>
<body>
    <h3>Edit Data Akun</h3>
    <form method="post" action="prosesUpdateAkun.php" enctype="multipart/form-data">
        Nama : <input type="text" name="nama" required value="<?php echo $user[0]['nama_user']; ?>">
        NIM : <input type="text" name="nim" required value="<?php echo $user[0]['nim_user']; ?>">
        Password : <input type="password" name="password" required value="<?php echo $user[0]['password']; ?>">
        Angkatan : <input type="text" name="angkatan" required value="<?php echo $user[0]['angkatan']; ?>">
        Foto Selfie + KTM :<input type="file" name="selfie" required>
        Foto Scan KTM :<input type="file" name="ktm" required>
        <input type="submit" name="update" class="button" value="Edit Data">
    </form>
</body>
</html>