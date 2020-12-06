<?php
include('admin/includes/config.php');
include('admin/includes/library.php');
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Timeline</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" href="Logo/HMTI2020.png">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<?php include('admin/includes/headerUser.php');?>

		<!-- Banner -->
		<!-- Note: The "styleN" class below should match that of the header element. -->
		<section id="banner" class="style2">
			<div class="inner">
				<span class="image">
					<img src="images/pic07.jpg" alt="" />
				</span>
				<header class="major">
					<h1>Timeline</h1>
				</header>
				<div class="content">
					<p>Pemilihan Umum Kahim dan Wakahim HMTI 2021</p>
				</div>
			</div>
		</section>

		<!-- Main -->
		<div id="main">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h2>Timeline Pemilihan Umum Kahim dan Wakahim HMTI 2021</h2>
					</header>
					<?php 
						$sqltimeline = "SELECT * FROM timeline ORDER BY tanggal_mulai ASC";
						$querytimeline = mysqli_query($koneksidb,$sqltimeline);
						while ($result = mysqli_fetch_array($querytimeline)){
							if($result['tanggal_akhir'] == '0000-00-00'){ ?>
								<p><b><?php echo Indonesia2Tgl($result['tanggal_mulai']);?> :</b> <?php echo htmlentities($result['kegiatan']);?></p>
								<?php 
							}
							else{ ?>
								<p><b><?php echo Indonesia2Tgl($result['tanggal_mulai']);?> - <?php echo Indonesia2Tgl($result['tanggal_akhir']);?> :</b> <?php echo htmlentities($result['kegiatan']);?></p>
							<?php
							}
					?>

					<?php 
						}?>
				</div>
			</section>
		</div>

		<!-- Footer -->
		<?php include('admin/includes/footer.html');?>

	</div>

	<!-- Scripts -->
	<?php include('admin/includes/scripts.html');?>

</body>

</html>