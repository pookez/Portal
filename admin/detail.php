<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
        body{width:100%}
        .row{padding:20px}
    </style>
</head>
<body>
	<?php include "./system/header.php"; ?>
    <div class="row">
	    <div class="col-lg-6">
	           <?php
                require "koneksi.php";
                $bab = isset($_GET['bab']) ? $_GET['bab'] :'';
                $query = $pdo->prepare("SELECT * FROM materi WHERE bab = :bab ");
                $query->bindValue(':bab',$bab);
                $query->execute();
                if($query->rowCount() > 0 ){ 
                    $r = $query->fetch();
                ?>
                     <h3 class="title"><?php echo $r['bab'];?></h3>
                     <hr/>
                     <div class="content"><?php echo $r['tujuan'];?></div>
                     <hr/>
                     <div class="content"><?php echo $r['artikel'];?></div>
                     <hr/>
                     <a href="home.php"><h2><< Back</h2></a>
                <?php
                
                }else{

                    echo "Article Not found";
                }
               ?>
        </div>
		
    </div>
   
    <!-- include libries(jQuery, bootstrap) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
