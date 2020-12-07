<?php
include('includes/config.php');
error_reporting(0);

$id=$_GET['id'];
$jumlah = 0;
$sql="UPDATE vote SET jumlah_vote='$jumlah' where no_urut='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'voting.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'calonpsg.php'; 
		</script>";
}
?>