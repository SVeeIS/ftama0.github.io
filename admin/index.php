<?php
session_start();
error_reporting(0);
include('includes/config.php');
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
	
	<title>Pemilu HMTI | Admin Dashboard</title>

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
</head>

<body>
<?php include('includes/header.php');?>

	<div class="ts-main-content">
<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">

									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
												<?php 
												$sqluser = "SELECT nim_user FROM user";
												$queryuser = mysqli_query($koneksidb,$sqluser);
												$user=mysqli_num_rows($queryuser);
												?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($user);?></div>
													<div class="stat-panel-title text-uppercase">Daftar User</div>
												</div>
											</div>
											<a href="user.php" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
												$sqltunggu = "SELECT nim_user FROM user WHERE status_registrasi='Menunggu Verifikasi'";
												$querytunggu = mysqli_query($koneksidb,$sqltunggu);
												$tunggu=mysqli_num_rows($querytunggu);
												?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($tunggu);?></div>
													<div class="stat-panel-title text-uppercase">Menunggu Verifikasi</div>
												</div>
											</div>
											<a href="usertunggu.php" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
												<?php 
												$sqlcalonps = "SELECT no_urut FROM calon";
												$querycalonps = mysqli_query($koneksidb,$sqlcalonps);
												$calonps=mysqli_num_rows($querycalonps);
												?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($calonps);?></div>
													<div class="stat-panel-title text-uppercase">Pasangan Calon</div>
												</div>
											</div>
											<a href="calonpsg.php" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">

									
									
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
												<?php 
												$sql1 = "SELECT nim_user FROM user WHERE status_vote='Sudah Memilih'";
												$query1 = mysqli_query($koneksidb,$sql1);
												$totalsuaramsk=mysqli_num_rows($query1);
												?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($totalsuaramsk);?></div>
													<div class="stat-panel-title text-uppercase">Jumlah Suara Masuk</div>
												</div>
											</div>
											<a href="voting.php/#memilih" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
												$sql2 = "SELECT nim_user FROM user WHERE status_vote='Belum Memilih'";
												$query2 = mysqli_query($koneksidb,$sql2);
												$totalblm=mysqli_num_rows($query2);
												?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($totalblm);?></div>
													<div class="stat-panel-title text-uppercase">User Belum Memilih</div>
												</div>
											</div>
											<a href="voting.php/#belum" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
												<?php
												$sql = "SELECT nim_calon FROM biodata_calon";
												$query = mysqli_query($koneksidb,$sql);
												$calon=mysqli_num_rows($query);
												?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($calon);?></div>
													<div class="stat-panel-title text-uppercase">Daftar Calon Ketua dan Wakil Ketua</div>
												</div>
											</div>
											<a href="biodatacalon.php" class="block-anchor panel-footer text-center">Rincian <i class="fa fa-arrow-right"></i></a>
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
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
