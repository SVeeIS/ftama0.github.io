<?php
require_once("koneksi.php");
require_once("ceklogin.php");
$nim = @($_SESSION['login_user']);
$ambildata=$pdo_conn->prepare("SELECT * FROM user WHERE nim_user=".$nim);
$ambildata->execute();
$biodata = $ambildata->fetchAll();
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Detail Akun</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="Logo/HMTI2020.png">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
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
                <li><a href="timeline.php">Timeline</a></li>
                <li><a href="voting.php">Voting</a></li>
                <li><a href="status_voting.php">Status Pemilihan</a></li>
            </ul>
            <ul class="actions stacked">
                <li><a href="detail_user.php" class="button primary fit">Detail Akun</a></li>
                <li><a href="logout.php" class="button fit">Keluar</a></li>
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
                    <h1>Detail Akun</h1>
                </header>
                <div class="content">
                    <p>Pastikan Data Terisi dengan Benar dan Foto yang Anda Masukkan Benar dan Terlihat Jelas!</p>
                </div>
            </div>
        </section>

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one">
                <div class="inner">
                    <header class="major">
                        <h2>Detail Akun</h2>
                    </header>
                </div>
            </section>

            <!-- Two -->
            <section id="two" class="spotlights">
                <section>
                    <a href="#" class="image">
                        <center>
                            <h3>Foto Profil
                                <div style="width:50%;"> <img src="images/<?php echo $biodata[0]["foto_user"]; ?>"
                                        alt="" data-position="center center" /></div>
                            </h3>
                        </center>
                        <center>
                            <h3>Foto KTM
                                <div style="width:50%;"> <img src="images/<?php echo $biodata[0]["foto_ktm"]; ?>" alt=""
                                        data-position="center center" /> </div>
                            </h3>
                        </center>
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <div class="nama_user">
                                    <h3><?php echo $biodata[0]["nama_user"]; ?></h3>
                                </div>
                            </header>
                            <div class="nim_user">
                                <p><b>NIM</b> : <?php echo $biodata[0]["nim_user"]; ?></p>
                            </div>
                            <div class="angkatan_user">
                                <p><b>Angkatan</b> : <?php echo $biodata[0]["angkatan"]; ?></p>
                            </div>
                            <div class="status vote">
                                <p><b>Status Registrasi</b> : <?php echo $biodata[0]["status_registrasi"]; ?></p>
                            </div>
                            <div class="status vote">
                                <p><b>Status Vote</b> : <?php echo $biodata[0]["status_vote"]; ?></p>
                            </div>
                            <?php
                            if($biodata[0]["status_registrasi"]=="Menunggu Verifikasi"){ ?>
                            <ul class="actions">
                                <li><a href="ubahDataUser.php?nim=<?php echo $biodata[0]['nim_user']; ?>"
                                        class="button">Ubah Data</a></li>
                            </ul>
                            <?php }?>
                        </div>
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