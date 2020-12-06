<?php
require_once("koneksi.php");
$ambildata = $pdo_conn->prepare("SELECT * FROM calon, biodata_calon WHERE  calon.nim_calon_ketua=biodata_calon.nim_calon ORDER BY no_urut ASC");
$ambildata->execute();
$ketua = $ambildata->fetchAll();
$jumlah = count($ketua);

$ambildata2 = $pdo_conn->prepare("SELECT * FROM calon, biodata_calon WHERE  calon.nim_calon_wakil=biodata_calon.nim_calon ORDER BY no_urut ASC");
$ambildata2->execute();
$wakil = $ambildata2->fetchAll();

require_once("ceklogin.php");
$nim = @($_SESSION['login_user']);
$ambildata3=$pdo_conn->prepare("SELECT * from user WHERE nim_user=".$nim);
$ambildata3->execute();
$user = $ambildata3->fetchAll();
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Voting</title>
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
					<h1>Voting</h1>
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
						<h2>Voting Pasangan Calon Kahim dan Wakahim HMTI 2021</h2>
					</header>
				</div>
			</section>

			<!-- Two -->
			<section id="two" class="spotlights">
				<?php
        		if(!empty($ketua) && !empty($wakil)) { 
					for($i=0; $i<$jumlah; $i++) {
        		?>
				<section>
					<a href="images/<?php echo $ketua[$i]["foto_pasangan_calon"]; ?>" class="image">
						<img src="images/<?php echo $ketua[$i]["foto_pasangan_calon"]; ?>" alt="" data-position="center center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3>Pasangan Calon No.0<?php echo $ketua[$i]["no_urut"]; ?></h3>
							</header>
							<p><?php echo $ketua[$i]["nama_calon"]." & ".$wakil[$i]["nama_calon"]; ?></p>
							<ul class="actions">
								<?php
								if(!empty($user)){
									if($user[0]["status_registrasi"]=="Verifikasi Berhasil"){ ?>
										<?php
										if($user[0]["status_vote"]=="Belum Memilih"){ ?>
											<li><a href='prosesvoting.php?no_urut=<?php echo $ketua[$i]['no_urut']; ?>?&nim=<?php echo $user[0]['nim_user']; ?>' class='button' onclick="return confirm('Anda Yakin Ingin Memilih Pasangan Ini?')">Vote</a></li>
										<?php 
										}
										else{ ?>
											<li><a href="status_voting.php" class="button fit">Lihat Hasil Voting</a></li>
										<?Php
										}
									}
									else{ ?>
										<li><a href="detail_user.php" class="button fit">Lihat Status Anda</a></li>
									<?php 
									}
								}
								else{ ?>
									<li><a href="login.html" class="button fit">Masuk Untuk Vote</a></li>
								<?php 
								}?>
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