<?php 

    // Sebelum masuk index.php, login dulu
    require_once 'login.php';

    // Jika sudah login, masuk ke index.php
    require_once 'index.php';

echo "Selamat datang di halaman index.php";

?>