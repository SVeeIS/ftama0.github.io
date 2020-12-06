<?php
require_once("koneksi.php");
$ambildata=$pdo_conn->prepare("SELECT * FROM calon ORDER BY no_urut ASC");
$ambildata->execute();
$calon = $ambildata->fetchAll();

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Visi & Misi</title>
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
					<h1>Visi & Misi</h1>
				</header>
				<div class="content">
					<p>Calon Kahim dan Wakahim HMTI 2021</p>
				</div>
			</div>
		</section>

		<!-- Main -->
		<div id="main">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h2>Visi & Misi Pasangan Calon Kahim dan Wakahim HMTI 2021</h2>
					</header>
				</div>
			</section>

			<!-- Two -->
			<section id="two" class="spotlights">
				<?php
        		if(!empty($calon)) { 
					foreach($calon as $row) {
        		?>
				<section>
					<a href="images/<?php echo $row["foto_pasangan_calon"]; ?>" class="image">
						<img src="images/<?php echo $row["foto_pasangan_calon"]; ?>" alt="" data-position="center center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3>Pasangan Calon No.0<?php echo $row["no_urut"]; ?></h3>
							</header>
							<p>Visi & Misi Pasangan Calon No.0<?php echo $row["no_urut"]; ?></p>
							<ul class="actions">
								<li><a href='detail_visimisi.php?no_urut=<?php echo $row["no_urut"]; ?>' class='button'>Detail</a></li>
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