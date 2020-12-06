<?php
require_once("koneksi.php");
$nim = @($_GET['nim']);
$ambildata=$pdo_conn->prepare("SELECT * FROM biodata_calon WHERE nim_calon=".$nim);
$ambildata->execute();
$biodata = $ambildata->fetchAll();

$ambildata2=$pdo_conn->prepare("SELECT * FROM calon WHERE nim_calon_ketua=".$nim."||nim_calon_wakil=".$nim);
$ambildata2->execute();
$urutan = $ambildata2->fetchAll();
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Detail Biodata</title>
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
					<h1>Biodata</h1>
				</header>
				<div class="content">
					<p>Calon Kahim & Wakahim HMTI 2021</p>
				</div>
			</div>
		</section>

		<!-- Main -->
		<div id="main">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h2>Detail Biodata Calon <?php
							if($nim == $urutan[0]["nim_calon_ketua"])
								echo "Ketua";
							else
								echo "Wakil Ketua";
						?>
						HMTI 2021 - No.0<?php echo $urutan[0]["no_urut"]; ?></h2>
					</header>
				</div>
			</section>

			<!-- Two -->
			<section id="two" class="spotlights">

			<?php if(!empty($biodata)) { ?>
				<section>
					<a href="images/<?php echo $biodata[0]["foto"]; ?>" class="image">
						<img src="images/<?php echo $biodata[0]["foto"]; ?>" alt="" data-position="center center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<div class="nama_calon">
									<h3><?php echo $biodata[0]["nama_calon"]; ?></h3>
								</div>
							</header>
							<div class="nim_calon">
								<p><b>NIM</b> : <?php echo $biodata[0]["nim_calon"]; ?></p>
							</div>
							<div class="angkatan">
								<p><b>Angkatan</b> : <?php echo $biodata[0]["angkatan"]; ?></p>
							</div>
							<div class="tempat_lahir">
								<p><b>Tempat lahir</b> : <?php echo $biodata[0]["tempat_lahir"]; ?></p>
							</div>
							<div class="tanggal_lahir">
								<p><b>Tanggal lahir</b> : <?php echo $biodata[0]["tanggal_lahir"]; ?></p>
							</div>
							<div class="jenis_kelamin">
								<p><b>Jenis Kelamin</b> : <?php echo $biodata[0]["jenis_kelamin"]; ?></p>
							</div>
							<div class="instagram">
								<a href="https://www.instagram.com/<?php echo $biodata[0]["instagram"]; ?>" target="_blank" class="icon brands alt fa-instagram"><span class="label">Instagram</span>
								<?php echo $biodata[0]["instagram"]; ?></a>
							</div><br>
						</div>
						<ul class="actions">
							<li><a href="biodata.php" class="button">Kembali</a></li>
						</ul>
					</div>
				</section>

				<?php } ?>
		</div>

		<!-- Footer -->
		<?php include('admin/includes/footer.html');?>

	</div>

	<!-- Scripts -->
	<?php include('admin/includes/scripts.html');?>

</body>

</html>