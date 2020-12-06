<?php
include('includes/config.php');
error_reporting(0);
$kegiatan = $_POST['kegiatan'];
$mulai = $_POST['mulai'];
$akhir = $_POST['akhir'];
$id=$_POST['id'];

$sql="UPDATE timeline SET kegiatan='$kegiatan',tanggal_akhir='$akhir', tanggal_mulai='$mulai' where id_timeline='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'timeline.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
            alert('Terjadi kesalahan, silahkan coba lagi!.'); 
            document.location = 'timelineedit.php?id=$id'; 
		</script>";
}
?>