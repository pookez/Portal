<?php
	session_start();
	include "./system/connection.php";
	
if($_SESSION['name']){

	include "./system/head.php";
	include "./system/header.php";
	?>
		<div class="container">
	<div style="margin:25px 0 0 35px;">
	<center><h1>SELMAT DATANG ADMIN</h1></center>
	</div>
	</div>
	<?php
}else{
	?><meta http-equiv="refresh" content="0;log_admin.php"><?php
}

?>