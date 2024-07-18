<?php
    // login.php

    include "fungsi/koneksi.php";
    session_start();

    if (isset($_SESSION['ceklog'])) {
        // Jika sudah login, redirect ke beranda.php
        echo "<script>window.location.replace('beranda.php')</script>";
        exit; // Hentikan eksekusi script selanjutnya
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai username dan password dari form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query untuk memeriksa username dan password di database
        $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = $koneksi->query($query);

        if ($result->num_rows == 1) {
            // Jika ditemukan data yang cocok, set session 'ceklog' dan redirect ke beranda.php
            $_SESSION['ceklog'] = true;
            echo "<script>window.location.replace('beranda.php')</script>";
            exit;
        } else {
            // Jika tidak ditemukan, tampilkan pesan error atau redirect kembali ke halaman login
            echo "<script>alert('Username atau password salah');</script>";
        }
    }
?>

<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/logstyle.css" type="text/css"/>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var images = [
                '../gambar/3.jpg',
                '../gambar/4.webp',
                '../gambar/5.jpg',
                '../gambar/6.jpeg',
                '../gambar/7.webp'
            ];

            var index = 0;
            function changeBackground() {
                var backgroundLayer = document.getElementById('background-layer');
                backgroundLayer.style.backgroundImage = 'url(' + images[index] + ')';
                backgroundLayer.style.boxShadow = 'inset 0 0 100px rgba(0, 0, 0, 0.5)';
                index = (index + 1) % images.length;
            }

            // Change background every 5 seconds (5000 milliseconds)
            setInterval(changeBackground, 5000);

            // Initial call to set the first background
            changeBackground();
        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #background-wrapper {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }
        #background-layer {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-attachment: fixed;
            transition: background-image 1s ease-in-out, box-shadow 1s ease-in-out;
        }

        #content-wrapper {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="background-wrapper">
        <div id="background-layer"></div>
    </div>
    <div id="content-wrapper">
        <div id="page">
            <center>
            <li>Login Admin</li>
            <img src="../gambar/bintang5.png" width="150px;" style="margin-top: 10px;border: 1px solid white;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <table style="margin-top: 10px; margin-bottom: 10px;">
                    <tr>
                        <td style="width:100px;">Username</td>  
                        <td><input type="text" placeholder="Nama Pengguna" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" placeholder="Kata Sandi" name="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login" style="background:rgba(255,0,0,0.8);color:white;padding:10px;width:80px;border:1px solid #fff;"></td>
                    </tr>
                </table>
            </form>
            </center>
        </div>
    </div>
</body>
</html>
