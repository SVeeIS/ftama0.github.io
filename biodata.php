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
		<?php include('admin/includes/footer.html');?>

	</div>

	<!-- Scripts -->
	<?php include('admin/includes/scripts.html');?>

</body>

</html>