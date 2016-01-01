<?php
session_start();
$mysql_hostname = "localhost";  //alamat server
    $mysql_user = "root";       //username untuk koneksi ke database
    $mysql_password = "";   //password koneksi ke database, klo tidak ada bisa dikosongkan
    $mysql_database = "pbk";   //nama database yang akan diakses/digunakan
     
    mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Koneksi ke database gagal!");
    mysql_select_db($mysql_database) or die("Database tidak ditemukan!");

                $username = mysql_real_escape_string($_POST['username']);
                $password = mysql_real_escape_string($_POST['password']);
                
                $checklogin = mysql_query("SELECT * FROM tabel_user WHERE username = '".$username."' AND password = '".$password."'");
                $sql = mysql_query("SELECT id_user,nama_user FROM tabel_user WHERE username = '".$username."' AND password = '".$password."'");
                if(mysql_num_rows($checklogin) == 1)
                {
                    $row = mysql_fetch_array($checklogin);
                    $nama = mysql_fetch_row($sql);
                    $_SESSION['id_user'] = $nama[0];
                    $_SESSION['username'] = $username;
                    $_SESSION['nama'] = $nama[1];
                    $_SESSION['LoggedIn'] = 1;
                    
                    echo "Login Berhasil";
                    ?>
                    <script> document.location.href='index.php'; </script>
                    <?php
                }
                else
                {
                    echo "<h1>Error</h1>";
                    echo "<p>Anda salah memasukkan username atau password</p>";
                    echo "<script> document.location.href='index.php'; </script>";
                }
            