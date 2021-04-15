<?php
ob_start();
session_start();

try {
     $DBuser = 'root';
     $DBpass = 'tiger';
     $database = 'mysql:dbname=cafe;host=database:3306';
     $db = new PDO($database, $DBuser, $DBpass);
     
     
} catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
}

