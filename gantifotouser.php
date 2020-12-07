<?php
    require_once("koneksi.php");
    $nim = $_GET['nim'];
    $ambildata=$pdo_conn->prepare("SELECT * from user WHERE nim_user=".$nim);
    $ambildata->execute();
    $user = $ambildata->fetchAll();
    
    if(isset($_POST['update'])){
        $foto=$_FILES["foto"]["name"];
        move_uploaded_file($_FILES["foto"]["tmp_name"],"images/".$_FILES["foto"]["name"]);
        $sql="UPDATE user SET foto_user='$foto', status_registrasi='Menunggu Verifikasi' WHERE nim_user='$nim'";
        $statement 	= $pdo_conn->prepare("$sql");
        $statement->execute();
        
        if($statement){
            echo '<script type="text/javascript">'; 
            echo 'alert("Foto Anda Berhasil Diedit!");'; 
            echo 'window.location.href = "detail_user.php?nim=$nim";';
            echo '</script>';
        }else {
            echo "<script type='text/javascript'>
                    alert('Terjadi kesalahan, Silahkan coba lagi!.'); 
                    document.location = 'gantifotouser.php?nim=$nim'; 
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Foto Selfie User dengan KTM</title>
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

        <h2 style="padding-left:20%;">Edit Foto Selfie dengan KTM</h2>
        <section id="contact">
            <div class="inner">
                <section>
                    <form method="post" enctype="multipart/form-data">
                        <div class="fields">
                            <div class="field half">
                                <label for="Foto">Foto Sekarang</label>
                                    <img src="images/<?php echo htmlentities($user[0]['foto_user']);?>" width="300" height="200" style="border:solid 1px #000">
                            </div>
                            <div class="field half">
                                <label for="ktm">Upload Foto Baru</label>
                                <input type="file" name="foto" required>
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

        <!-- Footer -->
        <?php include('admin/includes/footer.html');?>

    </div>

    <!-- Scripts -->
    <?php include('admin/includes/scripts.html');?>

</body>

</html>