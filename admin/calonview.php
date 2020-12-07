<!-- Printing -->
	<link rel="stylesheet" href="css/printing.css">
		
<?php
include('../ceklogin.php');
error_reporting(0);
include('includes/config.php');
if($_GET) {
	$Kode = $_GET['code'];
	$mySql ="SELECT * FROM calon WHERE no_urut ='$Kode'";
	$myQry = mysqli_query($koneksidb, $mySql);
	$result = mysqli_fetch_array($myQry);
	$ketua = $result['nim_calon_ketua'];
	$wakil = $result['nim_calon_wakil'];
	$mySqlkt ="SELECT * FROM biodata_calon WHERE nim_calon ='$ketua'";
	$myQrykt = mysqli_query($koneksidb, $mySqlkt);
	$resultkt = mysqli_fetch_array($myQrykt);
	$mySqlwk ="SELECT * FROM biodata_calon WHERE nim_calon ='$wakil'";
	$myQrywk = mysqli_query($koneksidb, $mySqlwk);
	$resultwk = mysqli_fetch_array($myQrywk);
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
	<h2>Detail Mahasiswa</h2>
</div>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
	<h4 class="modal-title" id="myModalLabel">Detail Mahasiswa</h4>
</div>
<div><br/></div>
<form id="theform" data-parsley-validate class="form-horizontal form-label-left" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">No. Urut</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="no" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['no_urut'];?>" readonly>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Calon Ketua</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $resultkt['nama_calon'];?>" readonly>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">NIM Calon Ketua</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['nim_calon_ketua'];?>" readonly>
			</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Calon Wakil Ketua</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $resultwk['nama_calon'];?>" readonly>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">NIM Calon Wakil Ketua</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="nis" required="required" class="form-control col-md-7 col-xs-12" name="nama" data-parsley-error-message="Field ini harus diisi" value="<?php echo $result['nim_calon_wakil'];?>" readonly>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Foto Calon Ketua</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="../images/<?php echo htmlentities($resultkt['foto']);?>" width="200" height="150">
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Foto Calon Wakil Ketua</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="../images/<?php echo htmlentities($resultwk['foto']);?>" width="200" height="150">
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Foto Pasangan Calon</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="../images/<?php echo htmlentities($result['foto_pasangan_calon']);?>" width="200" height="150">
			</div>
	</div>
	</form>
	<div class="modal-footer">
    <button class="btn btn-default" onclick="window.location.href='voteedit.php?id=<?php echo $result['no_urut'];?>'">Kosongkan Vote</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>

</div>

</body>
</html>