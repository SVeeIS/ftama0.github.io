<?php
require_once("koneksi.php");
// $ambildata=$pdo_conn->prepare("SELECT * FROM calon ORDER BY no_urut ASC");
// $ambildata->execute();
// $calon = $ambildata->fetchAll();
$ambildata = $pdo_conn->prepare("SELECT * FROM calon, biodata_calon WHERE  calon.nim_calon_ketua=biodata_calon.nim_calon ORDER BY no_urut ASC");
$ambildata->execute();
$ketua = $ambildata->fetchAll();
$jumlah = count($ketua);

$ambildata2 = $pdo_conn->prepare("SELECT * FROM calon, biodata_calon WHERE  calon.nim_calon_wakil=biodata_calon.nim_calon ORDER BY no_urut ASC");
$ambildata2->execute();
$wakil = $ambildata2->fetchAll();

$ambildata3 = $pdo_conn->prepare("SELECT * FROM vote ORDER BY no_urut ASC");
$ambildata3->execute();
$voting = $ambildata3->fetchAll();
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Status Pemlihan</title>
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
				<li><a href="visimisi.php">Visi & Misi</a></li>
				<li><a href="timeline.php">Timeline</a></li>
				<li><a href="voting.php">Voting</a></li>
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
                    <h1>Status Pemilihan </h1>
                </header>
                <div class="content">
                    <p>Status Pemlihan Calon Kahim dan Wakahim HMTI 2021</p>
                </div>
            </div>
        </section>

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one">
                <div class="inner">
                    <header class="major">
                        <h2>Status Pemlihan Umum Kahim dan Wakahim HMTI 2021</h2>
                    </header>
                </div>
            </section>

            <!-- Two -->
            <section id="two" class="spotlights">
                <?php
        		if(!empty($ketua) && !empty($wakil) && !empty($voting)) { 
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

                            <h8><b>Jumlah vote :</b> <?php echo $voting[$i]["jumlah_vote"]; ?> </h8>
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