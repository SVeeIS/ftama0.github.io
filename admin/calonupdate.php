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
$id=$_POST['id'];

$sql="UPDATE biodata_calon SET nim_calon='$nim',nama_calon='$nama',angkatan='$angkatan',tempat_lahir='$tempat',tanggal_lahir='$tanggal',jenis_kelamin='$jk',instagram='$instagram' where nim_calon='$nim'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'biodatacalon.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'bioedit.php?id=$nim'; 
		</script>";
}
?>