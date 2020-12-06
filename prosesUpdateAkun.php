<?php
require_once("koneksi.php");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$pass = $_POST['password'];
$angkatan = $_POST['angkatan'];

$sql="UPDATE user SET nama_user='$nama', password='$pass', angkatan='$angkatan' WHERE nim_user='$nim'";
$statement 	= $pdo_conn->prepare("$sql");
$statement->execute();

if($statement){
	echo '<script type="text/javascript">'; 
    echo 'alert("Data Anda Berhasil Diedit!");'; 
    echo 'window.location.href = "detail_user.php?nim=$nim";';
    echo '</script>';
}else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, Silahkan coba lagi!.'); 
			document.location = 'prosesUpdateAkun.php?nim=$nim'; 
		</script>";
}
?>
