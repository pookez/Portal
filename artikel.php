<div class="kop"><h3>Artikel Terbaru</h3></div>
<?php 
	$no=0; 
	$query=mysql_query("select * from article");
	
	if($query){
	while($row=mysql_fetch_array($query)){
		?>
		<div class="artikel"><big><a><?php echo $row['title'];?></a></big><br/>
		<small><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo $row['date'];?></small>
		<p><?php echo $row['content'];?></p>
		</div>
	  <?php	
	}
	
}else{
    
    echo "<tr><td colspan=\"2\">Not Found</td></tr>";
}
?>

<hr/>