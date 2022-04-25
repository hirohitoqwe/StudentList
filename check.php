<?php
header('Content-Type: text/html; charset=utf-8', true);
require_once('studentclass.php');
$name = $_POST['name'];
$sername= $_POST['sername'];
$otec=$_POST['otec'];
$mail=$_POST['mail'];
$password=md5($_POST['password']);
$sum=$_POST['sum'];
$direction=$_POST['direction'];
$directions=['ИВТ','Прикладная Математика','Прикладная Информатика'];
$unical=md5($mail);
if (filter_var($mail, FILTER_VALIDATE_EMAIL) and ($sum<301) and (in_array($direction,$directions)) and ($exist==0)) {
    setcookie('registration',1,time()+3600*24*90);
    student::sender($name,$sername,$otec,$mail,$password,$sum,$direction,$unical);
    die();
}else{
    echo 'Что-то не так:(';
    die();  
}

?>