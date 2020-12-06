<?php
    require_once("koneksi.php");
    $nim = $_GET['nim'];
    $ambildata=$pdo_conn->prepare("SELECT * from user WHERE nim_user=".$nim);
    $ambildata->execute();
    $user = $ambildata->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Akun</title>
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
            <a href="#" class="logo"><strong>Pemilu</strong> <span>HMTI 2021</span></a>
        </header>

        <h2 style="padding-left:20%;">Edit Data Akun</h2>
        <section id="contact">
            <div class="inner">
                <section>
                    <form method="post" action="prosesUpdateAkun.php" enctype="multipart/form-data">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" required value="<?php echo $user[0]['nama_user']; ?>">
                            </div>
                            <div class="field half">
                                <label for="NIM">NIM</label>
                                <input type="text" name="nim" readonly value="<?php echo $user[0]['nim_user']; ?>">
                            </div>
                            <div class="field half">
                                <label for="password">Password</label>
                                <input type="password" name="password" required
                                    value="<?php echo $user[0]['password']; ?>">
                            </div>
                            <div class="field half">
                                <label for="angkatan">Angkatan</label>
                                <input type="text" name="angkatan" required value="<?php echo $user[0]['angkatan']; ?>">
                            </div>
                            <div class="field half">
                                <label for="Foto">Foto selfie + KTM</label>
                                    <img src="images/<?php echo htmlentities($user[0]['foto_user']);?>" width="300" height="200" style="border:solid 1px #000">
									<div class="field half">
                                        <a href="gantifotouser.php?nim=<?php echo htmlentities($user[0]['nim_user'])?>">Ganti Foto</a>			
                                    </div>
                            </div>
                            <div class="field half">
                                <label for="ktm">Scan KTM</label>
                                    <img src="images/<?php echo htmlentities($user[0]['foto_ktm']);?>" width="300" height="200" style="border:solid 1px #000">
                                    <div class="field half">
                                        <a href="gantifotoktm.php?nim=<?php echo htmlentities($user[0]['nim_user'])?>">Ganti Foto</a>			
                                    </div>
                            </div>
                        </div>
                        <ul class="actions">
                            <li> <input type="submit" name="update" class="button" value="Edit Data"></li>
                        </ul>
                    </form>
                </section>
                <section class="split">
                    <section>
                        <div class="contact-method">
                            <h3>Perhatikan saat mengisi data !</h3>
                            <p>Tolong masukkan Scan/Foto KTM yang dapat terbaca dengan jelas</p>
                        </div>
                    </section>
                </section>
            </div>
        </section>

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