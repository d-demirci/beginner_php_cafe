<?php
ob_start();
session_start();

try {
     $DBuser = 'root';
     $DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
     $database = 'mysql:dbname=docker;host=database:3306';
     $db = new PDO($database, $DBuser, $DBpass);
     
     
} catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
}

