<!-- Printing -->
	<link rel="stylesheet" href="css/printing.css">
		
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_GET) {
	$Kode = $_GET['code'];
	$mySql ="SELECT * FROM biodata_calon WHERE nim_calon ='$Kode'";
	$myQry = mysqli_query($koneksidb, $mySql);
	$result = mysqli_fetch_array($myQry);
}
else {
	echo "NIM Mahasiswa Tidak Terbaca";
	exit;
}
?>
<html>
<head>
</head>
<body>
<div id="section-to-print">
<div id="only-on-print">
	<h2>Biodata Calon Ketua atau Wakil Ketua HMTI</h2>
</div>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
	<h4 class="modal-title" id="myModalLabel">Biodata Calon Ketua atau Wakil Ketua HMTI</h4>
</div>
<div><br/></div>
<form id="theform" data-parsley-validate class="form-horizontal form-label-left" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">NIM Mahasiswa</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['nim_calon'];?>" readonly>
			</div>
	</div><div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Mahasiswa</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['nama_calon'];?>" readonly>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Angkatan</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['angkatan'];?>" readonly>
			</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Tempat Lahir</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['tempat_lahir'];?>" readonly>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Tanggal Lahir</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="date" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['tanggal_lahir'];?>" readonly>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Jenis Kelamin</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['jenis_kelamin'];?>" readonly>
			</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Akun Instagram</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['instagram'];?>" readonly>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Foto</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="img/calon/<?php echo htmlentities($result['foto']);?>" width="200" height="150">
			</div>
	</div>
	
	</form>
	<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>

</div>

</body>
</html>