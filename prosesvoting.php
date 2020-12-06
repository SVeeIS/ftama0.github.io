<?php
require_once("koneksi.php");
$no_urut = $_GET['no_urut'];
$nim = $_GET['nim'];

$ambildata2=$pdo_conn->prepare("SELECT * FROM vote WHERE no_urut=".$no_urut);
$ambildata2->execute();
$voting = $ambildata2->fetchAll();

$jumlahvote = @($voting[0]['jumlah_vote']) + 1;

$sql="UPDATE user, vote SET status_vote='Sudah Memilih', jumlah_vote='$jumlahvote' WHERE nim_user='$nim' AND no_urut='$no_urut'";
$statement 	= $pdo_conn->prepare("$sql");
$statement->execute();

if($statement){
	echo '<script type="text/javascript">'; 
    echo 'alert("Pilihan Anda Berhasil Disimpan!");'; 
    echo 'window.location.href = "voting.php";';
    echo '</script>';
}else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, Silahkan coba lagi!.'); 
			document.location = 'voting.php'; 
		</script>";
}


?>
