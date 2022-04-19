<?php
header('Content-Type: text/html; charset=utf-8', true);
require_once('classes.php');
$name = $_POST['name'];
$sername= $_POST['sername'];
$otec=$_POST['otec'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$sum=$_POST['sum'];
$direction=$_POST['direction'];
$directions=['ИВТ','Прикладная Математика','Прикладная Информатика'];
if (filter_var($mail, FILTER_VALIDATE_EMAIL) and ($sum<300) and (in_array($direction,$directions)) and (strlen($name)+strlen($sername) + strlen($otec)<60)) {
    setcookie('registration',1,time()+3600*24*90);
    $Student=new Student($name,$sername,$otec,$mail,$password,$sum,$direction);
    $Student->sender();
    die();
}else{
    echo 'Что-то не так:(';
    die();
}

?>