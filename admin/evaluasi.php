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
	<?php include "./system/header.php";
	
		if (isset($_POST['submit'])){
		
		$pertanyaan=ucwords(htmlentities((trim($_POST['pertanyaan']))));
		$pilihan_a=ucwords(htmlentities((trim($_POST['pilihan_a']))));
		$pilihan_b=ucwords(htmlentities((trim($_POST['pilihan_b']))));
		$pilihan_c=ucwords(htmlentities((trim($_POST['pilihan_c']))));
		$pilihan_d=ucwords(htmlentities((trim($_POST['pilihan_d']))));
		$materi=ucwords(htmlentities((trim($_POST['materi']))));
		
		$jawaban=ucwords(htmlentities((trim($_POST['jawaban']))));
		$publish=htmlentities((trim($_POST['publish'])));
		$tipe=htmlentities((trim($_POST['tipe'])));
		
		$query=mysql_query("insert into tabel_soal values('','$pertanyaan','$pilihan_a','$pilihan_b','$pilihan_c','$pilihan_d','$jawaban','$publish','$tipe','$materi')");
		
		if($query){
			?>
			<script language="javascript">document.location.href="view2.php";</script><?php
		}else{
			echo mysql_error();
		}
		
	}else{
		unset($_POST['submit']);
	}
	?>

	<center><a href="view2.php" class="btn btn-danger">Lihat Evaluasi</a>
    <h1>Input Soal</h1></center>
    
    <form action="evaluasi.php" method="post">
    <table class="datatable" align="center">
    <tr>
        <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Materi</p></font></td>
        <td><input type="text" name="materi" size="30"/></td>
    </tr>

    <tr>
        <td width="29%" height="37" valign="top"><font size="2" face="verdana"><p>Pertanyaan</p></font></td>
        <td><textarea cols="23" rows="5" name="pertanyaan"></textarea></td>
    </tr>
    
    <tr>
        <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Pilihan A</p></font></td>
        <td><input type="text" name="pilihan_a" size="30"/></td>
    </tr>
    
    <tr>
        <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Pilihan B</p></font></td>
        <td><input type="text" name="pilihan_b" size="30"/></td>
    </tr>
    
     <tr>
        <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Pilihan C</p></font></td>
        <td><input type="text" name="pilihan_c" size="30"/></td>
    </tr>
    
     <tr>
        <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Pilihan D</p></font></td>
        <td><input type="text" name="pilihan_d" size="30"/></td>
    </tr>
    
     <tr>
        <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p><b>JABAWAN</b></p></font></td>
        <td>
        <select name="jawaban">
        	<option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
        </select>
        </td>
    </tr>
    
    
    <tr>
        <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p><b>PUBLISH</b></p></font></td>
        <td>
        <select name="publish">
        	<option value="yes">Yes</option>
        </select>
        </td>
    </tr>
    
    
    <tr>
        <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p><b>TIPE</b></p></font></td>
        <td>
        <select name="tipe">
        	<option value="1">1</option>
        </select>
        </td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td width="71%"><input name="submit" type="submit" value="Submit" />&nbsp;</td>
    </tr>
    </table>
    </form>
	
	</body>
	</html>
    
<?php
}else{
	?><script language="javascript">document.location.href='index.php?status=Anda belum login!'</script><?php
}
?>