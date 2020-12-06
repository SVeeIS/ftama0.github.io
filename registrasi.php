<?php
include('admin/includes/config.php');
error_reporting(0);
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$pass = $_POST['password'];
$angkatan = $_POST['angkatan'];
$foto = $_FILES['foto']["name"];
$ktm = $_FILES['ktm']["name"];
move_uploaded_file($_FILES["foto"]["tmp_name"],"images/".$_FILES["foto"]["name"]);
move_uploaded_file($_FILES["ktm"]["tmp_name"],"images/".$_FILES["ktm"]["name"]);
$sql 	= "INSERT INTO user (nim_user, nama_user, password, angkatan, foto_user, foto_ktm, status_registrasi, status_vote)
			VALUES ('$nim','$nama', '$pass', '$angkatan','$foto','$ktm','Menunggu Verifikasi','Belum Memilih')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Registrasi Berhasil'); 
			document.location = 'login.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
		</script>";
}
?>