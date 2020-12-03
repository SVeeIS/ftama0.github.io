<?php
include('includes/config.php');
error_reporting(0);
$no = $_POST['no'];
$ketua = $_POST['ketua'];
$wakil = $_POST['wakil'];
$foto=$_FILES["foto"]["name"];
move_uploaded_file($_FILES["foto"]["tmp_name"],"img/calon/".$_FILES["foto"]["name"]);
$sql 	= "INSERT INTO calon (no_urut, nim_calon_ketua, nim_calon_wakil, foto_pasangan_calon)
			VALUES ('$no','$ketua','$wakil','$foto')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
			echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'calonpsg.php'; 
		</script>";
}
else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahcalonpsg.php'; 
		</script>";
}

?>