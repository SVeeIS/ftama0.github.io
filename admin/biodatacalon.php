<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/format_rupiah.php');
include('includes/library.php');
if(strlen($_SESSION['alogin'])==0){	
	header('location:index.php');
} else{ ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Pemilu HMTI | Admin Kelola Biodata Calon</title>

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
						<h2 class="page-title">Kelola Biodata Calon Ketua dan Wakil Ketua HMTI</h2>
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Calon Ketua dan Wakil Ketua HMTI</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Nama</th>
											<th>NIM</th>
											<th>Angkatan</th>
											<th>Tempat, Tanggal Lahir</th>
											<th>Jenis Kelamin</th>
											<th>Foto</th>
											<th>Akun Instagram</th>
											<th><a href="tambahcalon.php"><span class="fa fa-plus-circle"></span>Tambah Calon</a></th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$nomor = 0;
										$sqlbiodata = "SELECT * FROM biodata_calon ORDER BY nama_calon ASC";
										$querybiodata = mysqli_query($koneksidb,$sqlbiodata);
										while ($result = mysqli_fetch_array($querybiodata)){
											$nomor++;
											?>
										<tr>
											<td><?php echo htmlentities($result['nama_calon']);?></td>
											<td><?php echo htmlentities($result['nim_calon']);?></td>
											<td><?php echo htmlentities($result['angkatan']);?></td>
											<td><?php echo htmlentities($result['tempat_lahir']);?>, <?php echo IndonesiaTgl(htmlentities($result['tanggal_lahir']));?></td>
											<td><?php echo htmlentities($result['jenis_kelamin']);?></td>
											<td><a href="../images/<?php echo htmlentities($result['foto']);?>" target="blank"><img src="../images/<?php echo htmlentities($result['foto']);?>" width="40" height="30"></a></td>
											<td><?php echo htmlentities($result['instagram']);?></td>
											<td class="text-center">
											    <a href="#myModal" data-toggle="modal" data-load-code="<?php echo $result['nim_calon']; ?>" data-remote-target="#myModal .modal-body"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;&nbsp;&nbsp;
												<a href="calonedit.php?id=<?php echo $result['nim_calon'];?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
												<a href="calondel.php?id=<?php echo $result['nim_calon'];?>" onclick="return confirm('Apakah anda akan menghapus Biodata <?php echo $result['nama_calon'];?>?');"><i class="fa fa-close"></i></a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Large modal -->
	<div class="modal fade bs-example-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<p>One fine body…</p>
				</div>
			</div>
		</div>
	</div>    
	<!-- Large modal --> 
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
		var app = {
			code: '0'
		};
		$('[data-load-code]').on('click',function(e) {
					e.preventDefault();
					var $this = $(this);
					var code = $this.data('load-code');
					if(code) {
						$($this.data('remote-target')).load('bioview.php?code='+code);
						app.code = code;
						
					}
		});
    </script>
</body>
</html>
<?php } ?>