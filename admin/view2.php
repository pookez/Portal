<?php session_start();
	include "./system/connection.php";
	include "./system/head.php";
	if(isset($_SESSION['name'])){
?>
    <!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Dashbor Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="Description" content="description" />
		<meta name="Keywords" content="keywords" />
        <SCRIPT type="text/javascript">
		if (typeof document.onselectstart!="undefined") {
		document.onselectstart=new Function ("return false");
		}
		else{
		document.onmousedown=new Function ("return false");
		document.onmouseup=new Function ("return true");
		}
		</SCRIPT>
	</head>
	<body onLoad="document.postform.elements['username'].focus();">
	<?php include "./system/header.php"; ?>
	<center><a href="evaluasi.php" class="btn btn-danger">Tambah Evaluasi</a>
    <h1>Edit Soal</h1></center>
        <p>
        <?php
		$query=mysql_query("select * from tabel_soal order by tipe asc");
		?><table align="center" width="50%"><?php
		$no=0;
		while($row=mysql_fetch_array($query)){
		?>
			<tr>
           		<td><font><?php echo $no=$no+1;?>.</font></td><td><font><?php echo $row['pertanyaan'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font>A) <?php echo $row['pilihan_a'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font>B) <?php echo $row['pilihan_b'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font>C) <?php echo $row['pilihan_c'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font>D) <?php echo $row['pilihan_d'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#337AB7">MATERI : <b><?php echo $row['materi'];?></b> &raquo; JAWABAN : <b><?php echo $row['jawaban'];?></b> &raquo; PUBLISH : <b><?php echo ucwords($row['publish']);?></b> &raquo;
                TIPE : <b><?php echo ucwords($row['tipe']);?></b> &raquo;</font>
                <form action="delete.php" method="post"><button value="<?php echo $row['id_soal']?>" name="id_soal" title="Delete" >Delete</button></form>
                </td>
            </tr>
            <tr>
           		<td colspan="2"><br /></td>
            </tr>
		<?php
		}
		?>
        </table>
        </p>
</body>
</html>
<?php
}else{
	?><p>Anda belum login. silahkan <a href="index.php">Login</a></p><?php
}
?>