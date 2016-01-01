<?php
    require "koneksi.php";
    $bab = isset($_GET['bab']) ? $_GET['bab'] :'';
    $stmt = $pdo->prepare("DELETE FROM materi WHERE bab = :bab ");
    $stmt->bindValue(':bab',$bab);
if($stmt->execute())
    header("Location:index.php");