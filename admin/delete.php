<?php
	include "./system/connection.php";

	$id = $_POST['id_soal'];
	
	$query=mysql_query("delete from tabel_soal where id_soal='$id'");
	
	if($query){
		?><script language="javascript">document.location.href="view2.php"</script><?php
	}else{
		echo mysql_error();
	}

?>
