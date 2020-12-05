<?php
session_name("verify");   //pilih session
session_start();        //memulai session
unset($_SESSION["verify"]);    //kosongkan session
session_destroy();       //hapus session
header("location: login.html");
?>