<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "pbk";
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
