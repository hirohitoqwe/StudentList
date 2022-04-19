<?php
require_once 'database.php';
$email=$_POST['mail'];
$password=md5($_POST['pass']);
$unical=md5($email);
$querry="SELECT * FROM student WHERE `email`= '$email' AND `password`= '$password'";
$data=$pdo->prepare($querry);
setcookie('unic',$unical,time()+3600*3);
$data->execute();
if ($data->columnCount()>1){
    header('Location:list.php');
    die();
}

?>