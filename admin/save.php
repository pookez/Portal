<?php
require "koneksi.php";

$stmt = $pdo->prepare("INSERT INTO materi (id,materi,label,tujuan,bab,artikel) VALUES (:id,:materi,:label,:tujuan,:bab,:artikel)");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':materi', $materi);
$stmt->bindParam(':label', $label);
$stmt->bindParam(':tujuan', $tujuan);
$stmt->bindParam(':bab', $bab);
$stmt->bindParam(':artikel', $artikel);

// insert one row
$id = $_POST['id'];
$materi = $_POST['materi'];
$label = $_POST['label'];
$tujuan = $_POST['tujuan'];
$bab = $_POST['bab'];
$artikel = $_POST['artikel'];
if($stmt->execute())
    header("Location:home.php");
    
