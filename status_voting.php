<?php
require_once("koneksi.php");
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
        <?php include('admin/includes/headerUser.php');?>

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
                    <p>Status Pemilihan Calon Kahim dan Wakahim HMTI 2021</p>
                </div>
            </div>
        </section>

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one">
                <div class="inner">
                    <header class="major">
                        <h2>Status Pemilihan Umum Kahim dan Wakahim HMTI 2021</h2>
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
        <?php include('admin/includes/footer.html');?>

    </div>

    <!-- Scripts -->
    <?php include('admin/includes/scripts.html');?>

</body>

</html>