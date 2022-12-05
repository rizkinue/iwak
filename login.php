<?php 

    // Memulai Sesi
    session_start();

    // Memanggil file koneksi.php  
    include "koneksi.php";

    // Jika tombol login di klik
    if(isset($_POST['login'])){

        // Menangkap data dari form login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Membuat query untuk mengecek apakah username dan password ada di database
        $query = mysqli_query($koneksi
        , "SELECT * FROM user WHERE username='$username' AND password='$password'");
        $cek = mysqli_num_rows($query);

        // Jika username dan password ada di database
        if($cek > 0){

            // Membuat session untuk menyimpan data username
            $_SESSION['username'] = $username;

            // Membuat session untuk menyimpan data password
            $_SESSION['password'] = $password;

            // Membuat session untuk menyimpan data level
            $_SESSION['level'] = $level;

            // Redirect ke halaman index.php
            header("location:index.php");

        // Jika username dan password tidak ada di database
        }else{

            // Redirect ke halaman login.php
            header("location:login.php");

        }
    };

    // Membuat form Login
    echo "<form action='' method='POST'>
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type='text' name='username'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type='password' name='password'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type='submit' name='login' value='Login'></td>
            </tr>
        </table>
    </form>";
    
?>