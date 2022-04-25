<?php
    $user='root';
    $password='';
    $pdo=new PDO('mysql:host=localhost;dbname=student',$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;

?>