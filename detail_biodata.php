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
		<header id="header" class="alt">
			<a href="beranda.php" class="logo"><strong>Pemilu</strong> <span>HMTI 2021</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="beranda.php">Beranda</a></li>
				<li><a href="biodata.php">Biodata</a></li>
				<li><a href="visimisi.php">Visi & Misi</a></li>
				<li><a href="voting.php">Timeline</a></li>
				<li><a href="timeline.php">Voting</a></li>
				<li><a href="status_voting.php">Status Pemilihan</a></li>
			</ul>
			<ul class="actions stacked">
				<?php
				require_once("ceklogin.php");
				if(isset($_SESSION['login_user'])){ ?>
					<li><a href="detail_user.html" class="button primary fit">Detail Akun</a></li>
					<li><a href="logout.php" class="button fit">Keluar</a></li>
				<?php }
				else{ ?>
					<li><a href="login.html" class="button fit">Masuk</a></li>
				<?php }?>
			</ul>
		</nav>

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
								<a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span>
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
		<footer id="footer">
			<div class="inner">
				<ul class="icons">
					<li><a href="https://www.youtube.com/channel/UCBWvors8mO16aa-GCyscrKw"
							class="icon brands alt fa-youtube"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/HMTIFTunlam/" class="icon brands alt fa-facebook-f"><span
								class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/hmti_ftulm/" class="icon brands alt fa-instagram"><span
								class="label">Instagram</span></a></li>
					<li><a href="https://www.hmti.ft.ulm.ac.id/" class="icon brands alt fa-wordpress"><span
								class="label">Website</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; PEMILU HMTI 2021</li>
					<li>Design: <a href="https://www.hmti.ft.ulm.ac.id/">HMTI</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>