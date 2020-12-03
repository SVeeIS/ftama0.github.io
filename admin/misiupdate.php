<?php
include('includes/config.php');
error_reporting(0);
$no = $_POST['no'];
$misi = $_POST['misi'];
$id=$_POST['id'];

$sql="UPDATE misi SET no_urut='$no',isi_misi='$misi' where id_misi='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'misi.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'misiedit.php?id=$id'; 
		</script>";
}
?>