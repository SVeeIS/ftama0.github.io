<?php
include('includes/config.php');
error_reporting(0);
$no = $_POST['no'];
$misi = $_POST['misi'];
$sql 	= "INSERT INTO misi (no_urut, isi_misi)
			VALUES ('$no','$misi')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'misi.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahmisi.php'; 
		</script>";
}

?>