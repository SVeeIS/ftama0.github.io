<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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
            <a href="#" class="logo"><strong>Pemilu</strong> <span>HMTI 2021</span></a>
        </header>

        <!-- SignUp -->
        <section id="contact">
            <div class="inner">
                <section>
                    <form method="post" action="registrasi.php" id="myForm" onsubmit="return valid(this);" enctype="multipart/form-data">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" id="name" required/>
                            </div>
                            <div class="field half">
                                <label for="NIM">NIM</label>
                                <input type="text" name="nim" id="nim" required/>
                            </div>
                            <div class="field half">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required/>
                            </div>
                            <div class="field half">
                                <label for="angkatan">Angkatan</label>
                                <input type="text" name="angkatan" id="angkatan" required/>
                            </div>
                            <div class="field half">
                                <label for="Foto">Foto selfie + KTM</label>
                                <input type="file" name="foto" id="foto" required/>
                            </div>
                            <div class="field half">
                                <label for="ktm">Scan KTM</label>
                                <input type="file" name="ktm" id="ktm" required/>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Daftar" class="primary" /></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </form>
                </section>
                <section class="split">
                    <section>
                        <div class="contact-method">
                            <h1>Sudah punya Akun ?</h1>
                            <button type="button" onclick="window.location.href='login.php'">Masuk</button>
                        </div>
                    </section>
                </section>
            </div>
        </section>

        <!-- Footer -->
        <?php include('admin/includes/footer.html');?>

    </div>

    <!-- Scripts -->
    <?php include('admin/includes/scripts.html');?>

</body>

</html>