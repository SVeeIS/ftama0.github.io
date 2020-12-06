<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="Logo/HMTI2020.png">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
                <header id="header" class="alt">
                    <a href="#" class="logo"><strong>Pemilu</strong> <span>HMTI 2021</span></a>
                </header>

            <!-- SignIn -->
                <section id="contact">
                    <div class="inner">
                        <section>
                            <form method="post" action="ceklogin.php" id="myForm">
                                <div class="fields">
                                    <div class="field half">
                                        <label for="name">NIM</label>
                                        <input type="text" name="nim" id="nim" required/>
                                    </div>
                                    <div class="field half">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" required/>
                                    </div>
                                </div>
                                <ul class="actions">
                                    <li><button type="submit" class="primary">Masuk</button></li>
                                    <li><input type="reset" value="Reset" /></li>
                                </ul>
                            </form>
                        </section>
                        <section class="split">
                            <section>
                                <div class="contact-method">
                                    <h2>Belum punya Akun ?</h2>
                                        <button type="button" onclick="window.location.href='index.php'">Daftar</button><br><br>
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