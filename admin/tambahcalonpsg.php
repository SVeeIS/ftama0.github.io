<?php
include('../ceklogin.php');
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login_admin'])==0){	
	header('location:../login.php');

}else{
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<link rel="icon" href="../Logo/HMTI2020.png">
	<title>Pemilu HMTI | Admin Tambah Pasangan Calon</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
</style>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Tambah Pasangan Calon</h2>
						<?php
							$sqlbiodata = "SELECT * FROM biodata_calon";
							$querybiodata = mysqli_query($koneksidb,$sqlbiodata);
							$querybiodatacalon = mysqli_query($koneksidb,$sqlbiodata);
						?>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
									<div class="panel-heading">Form Tambah Pasangan Calon Ketua atau Wakil Ketua HMTI</div>
								<div class="panel-body">
									<form method="post" name="theform" action="insertcalonpsg.php" class="form-horizontal" onsubmit="return valid(this);" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-2 control-label">No Urut<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="no" class="form-control" required>
										</div>
									</div>
									<div class="hr-dashed"></div>						
									<div class="form-group">
										<label class="col-sm-2 control-label">Calon Ketua HMTI<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<select class="form-control" name="ketua" required>
											<option value=""> == Pilih Calon Ketua == </option>
											<?php
												while ($result = mysqli_fetch_array($querybiodata)){
											?>
												<option value="<?php echo htmlentities($result['nim_calon']);?>"><?php echo htmlentities($result['nama_calon']);?></option>
											<?Php
												}
											?>
										</select>
										</div>
										<label class="col-sm-2 control-label">Calon Wakil Ketua HMTI<span style="color:red">*</span></label>
										<div class="col-sm-4">
										<select class="form-control" name="wakil" required>
											<option value=""> == Pilih Calon Wakil Ketua == </option>
											<?php
												while ($result2 = mysqli_fetch_array($querybiodatacalon)){
											?>
												<option value="<?php echo htmlentities($result2['nim_calon']);?>"><?php echo htmlentities($result2['nama_calon']);?></option>
											<?Php
												}
											?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<h4><b>Upload Gambar</b></h4>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-4">
											Foto Calon Pasangan<span style="color:red">*</span><input type="file" name="foto" accept="image/*" required>
											</div>

									</div>
									
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="form-group">
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<button class="btn btn-primary" type="submit">Save changes</button>
												<button class="btn btn-default" type="reset">Reset</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
					</div>
				</div>
				
			</div>
		</div>
	</div>
</form>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>