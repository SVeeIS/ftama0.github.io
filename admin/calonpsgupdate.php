<?php
include('includes/config.php');
error_reporting(0);
$no = $_POST['no'];
$ketua = $_POST['ketua'];
$wakil = $_POST['wakil'];
$id=$_POST['id'];

$sql="UPDATE calon SET no_urut='$no',nim_calon_ketua='$ketua',nim_calon_wakil='$wakil' where no_urut='$no'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'calonpsg.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'calonpsgedit.php?id=$no'; 
		</script>";
}
?>