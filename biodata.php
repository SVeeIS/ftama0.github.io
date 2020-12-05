<?php
require_once("koneksi.php");

$ambildata = $pdo_conn->prepare("SELECT * FROM calon, biodata_calon WHERE  calon.nim_calon_ketua=biodata_calon.nim_calon ORDER BY no_urut ASC");
$ambildata->execute();
$ketua = $ambildata->fetchAll();
$jumlah = count($ketua);

$ambildata2 = $pdo_conn->prepare("SELECT * FROM calon, biodata_calon WHERE  calon.nim_calon_wakil=biodata_calon.nim_calon ORDER BY no_urut ASC");
$ambildata2->execute();
$wakil = $ambildata2->fetchAll();

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Biodata</title>
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
			<a href="beranda.html" class="logo"><strong>Pemilu</strong> <span>HMTI 2021</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="beranda.php">Beranda</a></li>
				<li><a href="biodata.php">Biodata</a></li>
				<li><a href="visimisi.html">Visi & Misi</a></li>
				<li><a href="voting.html">Timeline</a></li>
				<li><a href="timeline.html">Voting</a></li>
				<li><a href="status_voting.html">Status Pemilihan</a></li>
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
						<h2>Biodata Pasangan Calon Kahim & Wakahim HMTI 2021</h2>
					</header>
					<p>Pada pemilu Kahim & Wakahim HMTI 2021 terdapat <?php echo $jumlah;?> pasangan calon</p>
				</div>
			</section>

			<!-- Two -->
			<section id="two" class="spotlights">
				<?php
        		if(!empty($ketua) && !empty($wakil)) { 
					for($i=0; $i<$jumlah; $i++) {
        		?>
				<section>
					<a href="images/<?php echo $ketua[$i]["foto"]; ?>" class="image">
						<img src="images/<?php echo $ketua[$i]["foto"]; ?>" alt="" data-position="center center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3><?php echo $ketua[$i]["nama_calon"]; ?></h3>
							</header>
							<p>No 0<?php echo $ketua[$i]["no_urut"]; ?> - Calon Ketua HMTI 2021</p>
							<ul class="actions">
								<li><a href="detail_biodata.php?nim=<?php echo $ketua[$i]['nim_calon']; ?>" class="button">Detail</a></li>
							</ul>
						</div>
					</div>
				</section>
				<section>
					<a href="images/<?php echo $wakil[$i]["foto"]; ?>" class="image">
						<img src="images/<?php echo $wakil[$i]["foto"]; ?>" alt="" data-position="top center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3><?php echo $wakil[$i]["nama_calon"]; ?></h3>
							</header>
							<p>No 0<?php echo $wakil[$i]["no_urut"]; ?> - Calon Wakil Ketua HMTI 2021</p>
							<ul class="actions">
								<li><a href='detail_biodata.php?nim=<?php echo $wakil[$i]['nim_calon']; ?>' class='button'>Detail</a></li>
							</ul>
						</div>
					</div>
				</section>
				<?php
					}
					}
				?>
			</section>
			
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