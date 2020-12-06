<?php
require_once("koneksi.php");
$urutan = @($_GET['no_urut']);
$ambildata=$pdo_conn->prepare("SELECT * FROM visi WHERE no_urut=".$urutan);
$ambildata->execute();
$visi = $ambildata->fetchAll();

$ambildata2=$pdo_conn->prepare("SELECT * FROM misi WHERE no_urut=".$urutan);
$ambildata2->execute();
$misi = $ambildata2->fetchAll();
$jumlah_misi = count($misi);

$ambildata3=$pdo_conn->prepare("SELECT foto_pasangan_calon FROM calon WHERE no_urut=".$urutan);
$ambildata3->execute();
$foto = $ambildata3->fetchAll();
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Detail Visi & Misi</title>
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
						<h2>Visi & Misi Calon Kahim dan Wakahim HMTI 2021 - No.0<?php echo $urutan; ?></h2>
					</header>
				</div>
			</section>

			<!-- Two -->
			<section id="two" class="spotlights">
				<section>
					<a href="images/<?php echo $foto[0]["foto_pasangan_calon"]; ?>" class="image">
						<img src="images/<?php echo $foto[0]["foto_pasangan_calon"]; ?>" alt="" data-position="center center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<div class="isi_visi">
									<h3>Visi</h3>
								</div>
							</header>
							<p><?php echo @($visi[0]["isi_visi"]); ?></p>
							<header class="major">
								<div class="isi_misi">
									<h3>Misi</h3>
								</div>
							</header>
							<?php for($i=0; $i < $jumlah_misi; $i++) {
								$no = $i+1; ?>
							<p><?php echo $no.". ".@($misi[$i]["isi_misi"]); ?></p>
							<?php } ?>
						</div>
						<ul class="actions">
							<li><a href="visimisi.php" class="button">Kembali</a></li>
						</ul>
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