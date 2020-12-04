<?php
include('includes/config.php');
error_reporting(0);
$no=$_POST['nomor'];
$jumlah = 0;
$sql 	= "INSERT INTO vote (no_urut,jumlah_vote)
			VALUES ('$no','$jumlah')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
			echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'voting.php'; 
		</script>";
}
else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'voting.php';
		</script>";
}

?>