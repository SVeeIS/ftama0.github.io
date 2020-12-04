<?php
include('includes/config.php');
error_reporting(0);
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$angkatan = $_POST['angkatan'];
$instagram = $_POST['instagram'];
$jk = $_POST['jk'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$foto=$_FILES["foto"]["name"];
move_uploaded_file($_FILES["foto"]["tmp_name"],"../images/".$_FILES["foto"]["name"]);
$sql 	= "INSERT INTO biodata_calon (nim_calon, nama_calon, angkatan, tempat_lahir, tanggal_lahir, jenis_kelamin, foto, instagram)
			VALUES ('$nim','$nama','$angkatan','$tempat','$tanggal','$jk','$foto','$instagram')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'biodatacalon.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahcalon.php'; 
		</script>";
}

?>