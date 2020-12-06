<?php
include('includes/config.php');
error_reporting(0);
$kegiatan = $_POST['kegiatan'];
$mulai = $_POST['mulai'];
$akhir = $_POST['akhir'];

$sql 	= "INSERT INTO timeline (tanggal_mulai, tanggal_akhir, kegiatan)
			VALUES ('$mulai','$akhir','$kegiatan')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'timeline.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahtimeline.php'; 
		</script>";
}

?>