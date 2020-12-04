<?php
include('includes/config.php');
error_reporting(0);
$no = $_POST['no'];
$visi = $_POST['visi'];
$sql 	= "INSERT INTO visi (no_urut, isi_visi)
			VALUES ('$no','$visi')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'visi.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahvisi.php'; 
		</script>";
}

?>