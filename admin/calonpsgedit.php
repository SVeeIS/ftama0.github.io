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
	<title>Pemilu HMTI | Admin Edit Pasangan Calon</title>

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
					
						<h2 class="page-title">Edit Pasangan Calon</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Form Edit Pasangan Calon Ketua atau Wakil Ketua HMTI</div>
									<div class="panel-body">
										<?php 
											$id=intval($_GET['id']);
											$sql ="SELECT * FROM calon WHERE no_urut='$id'";
											$query = mysqli_query($koneksidb,$sql);
											$result = mysqli_fetch_array($query);
											$sqlcalon = "SELECT * FROM biodata_calon";
											$query1 = mysqli_query($koneksidb,$sqlcalon);
											$query2 = mysqli_query($koneksidb,$sqlcalon);
										?>

										<form method="post" class="form-horizontal" name="theform" action ="calonpsgupdate.php" onsubmit="return valid(this);" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 control-label">No Urut<span style="color:red">*</span></label>
											<div class="col-sm-4">
												<input type="text" name="no" class="form-control" value="<?php echo htmlentities($result['no_urut']);?>"readonly>
											</div>
										</div>
										<div class="hr-dashed"></div>	
										
										<div class="form-group">
										<label class="col-sm-2 control-label">Calon Ketua HMTI<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<select class="form-control" name="ketua" required>
											
											<option value="<?php echo htmlentities($result['nim_calon_ketua']);?>"> == Tidak Berubah == </option>
											<?php
												while ($result1 = mysqli_fetch_array($query1)){
											?>
												<option value="<?php echo htmlentities($result1['nim_calon']);?>"><?php echo htmlentities($result1['nama_calon']);?></option>
											<?Php
												}
											?>
										</select>
										</div>
										<label class="col-sm-2 control-label">Calon Wakil Ketua HMTI<span style="color:red">*</span></label>
										<div class="col-sm-4">
										<select class="form-control" name="wakil" required>
											<option value="<?php echo htmlentities($result['nim_calon_wakil']);?>"> == Tidak Berubah == </option>
											<?php
												while ($result2 = mysqli_fetch_array($query2)){
											?>
												<option value="<?php echo htmlentities($result2['nim_calon']);?>"><?php echo htmlentities($result2['nama_calon']);?></option>
											<?Php
												}
											?>
											</select>
										</div>
									</div>
	
									<div class="hr-dashed"></div>

										<div class="form-group">
											<div class="col-sm-12">
												<h4><b>Foto</b></h4>
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-4">
												<img src="../images/<?php echo htmlentities($result['foto_pasangan_calon']);?>" width="300" height="200" style="border:solid 1px #000">
												<a href="gantifotocalonpsg.php?no_urut=<?php echo htmlentities($result['no_urut'])?>">Ganti Foto</a>
											</div>
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
												<button class="btn btn-primary" type="submit" style="margin-top:4%">Save changes</button>
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

			</div>
		</div>
	</div>

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
