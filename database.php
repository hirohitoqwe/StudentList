<?php
    header('Content-Type: text/html; charset=utf-8', true);
    $user='root';
    $password='';
    $pdo=new PDO('mysql:host=localhost;dbname=student',$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>