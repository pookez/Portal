<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	$mysql_hostname = "localhost";  //alamat server
	$mysql_user = "root";       //username untuk koneksi ke database
	$mysql_password = "";   //password koneksi ke database, klo tidak ada bisa dikosongkan
	$mysql_database = "pbk";   //nama database yang akan diakses/digunakan
	 
	mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Koneksi ke database gagal!");
	mysql_select_db($mysql_database) or die("Database tidak ditemukan!");
	
	$nama=ucwords($_POST['nama']);
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	//periksa jika data yang dimasukan belum lengkap
	if ($username=="" || $password=="")
	{
		//jika ada inputan yang kosong
		echo "<p>Data Anda belum lengkap</p>";
		
	}else{
		//catat data file yang berhasil di upload
		$upload=mysql_query("INSERT INTO tabel_user VALUES('','$nama','$username','$password')");
		
		if($upload){
			//jika berhasil
			echo "<p>Data Anda berhasil disimpan. Silahkan Login</p>";
		}else{
			echo "gagal simpan data";
		}
	}
}else{
	unset($_POST['submit']);
}
?>