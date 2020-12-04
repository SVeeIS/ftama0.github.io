<?php
include('includes/config.php');
error_reporting(0);

$id=$_GET['id'];
$status = $_GET['status'];
$sql="UPDATE user SET status_registrasi='$status' where nim_user='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'usertunggu.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'usertunggu.php'; 
		</script>";
}
?>