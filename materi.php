<!doctype html>
<html lang="en">
		<?php 
		include"./system/head.php";
		?>
	<body>
	<div class="wrapper">
		<?php include"./system/header.php";	?>
	<div class="page">
		<div class="main-banner"><img src="images/banner.jpg" alt="banner" /></div>
		<div class="clear"></div>
		<?php include"./system/sidebar.php"; 
		$id = $_POST['id'];
		$sql = mysql_query("select * from materi where id = '$id'");
?>

<div class="right-column">
	<div class="right-column-content">
		<form ACTION="bab.php" METHOD="POST" NAME="input">
		<?php
		$i = 1;
		error_reporting(0);
		while ($row = mysql_fetch_row($sql)) { ?>
			<div style="float:left; margin:0 20px 20px 0;" ><button style="background:#E63636; color:#fff; padding:15px;" name="list" value="<?php echo $row[4];?>" /><?php echo $row[4];?></button></div>
		<?php 
			$i++; 
		}
		?>
		</form>
	</div>
</div>
	</div>
		<?php include"./system/footer.php";	?>
	</div>
	</body>
</html>