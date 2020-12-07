<?php
require_once("koneksi.php");
$no_urut = $_GET['no_urut'];
$nim = $_GET['nim'];

$sql="UPDATE user, vote SET status_vote='Sudah Memilih', jumlah_vote=jumlah_vote+1 WHERE nim_user='$nim' AND no_urut='$no_urut'";
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
