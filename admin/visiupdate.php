<?php
include('includes/config.php');
error_reporting(0);
$no = $_POST['no'];
$visi = $_POST['visi'];
$id=$_POST['id'];

$sql="UPDATE visi SET no_urut='$no',isi_visi='$visi' where id_visi='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'visi.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'visiedit.php?id=$id'; 
		</script>";
}
?>