<?php
include('../ceklogin.php');
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login_admin'])==0){	
	header('location:../login.php');
}
else{
if(isset($_GET['id'])){
	$id	= $_GET['id'];
	$mySql	= "DELETE FROM visi WHERE id_visi='$id'";
	$myQry	= mysqli_query($koneksidb, $mySql);
	echo "<script type='text/javascript'>
			alert('Data berhasil dihapus.'); 
			document.location = 'visi.php'; 
		</script>";
}else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'visi.php'; 
		</script>";
}
}
?>