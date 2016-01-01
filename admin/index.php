<?php
	session_start();
	include "./system/connection.php";
?>
<link href="style/css1.css" rel="stylesheet">

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['name']))
{
	?><meta http-equiv="refresh" content="0;awal.php"><?php
}
elseif(!empty($_POST['name']) && !empty($_POST['password']))
{
    $name = mysql_real_escape_string($_POST['name']);
    $password = mysql_real_escape_string(md5($_POST['password']));
     
    $checklogin = mysql_query("SELECT * FROM admin WHERE name = '".$name."' AND password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
         
        $_SESSION['name'] = $name;
        $_SESSION['LoggedIn'] = 1;
         
        echo "<p>Sedang di proses...</p>";
        echo "<script language='javascript'>document.location.href='home.php'</script>'";
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Anda salah memasukkan name atau password. Klik <a href=\"index.php\"> untuk mencoba lagi</a>.</p>";
    }
}
else
{
    ?>
	<?php
	include './system/head.php';
	?>
	<div class="container" style="margin-top: 100px;">
		<center>
			<form class="form-signin"  action="index.php" enctype="multipart/form-data" method="post">
				<h1 class="form-signin-heading">Login Admin</h1>
				<input type="text" name="name" class="form-control" placeholder="name" />
				<input type="password" name="password" class="form-control" placeholder="Password" />
				<input type="submit" value="Login" class="btn btn-primary btn-lg btn-block" />
			</form>
		</center>
	</div>
   <?php
}
?>