<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Список Студентов</title>
</head>
<body>
    <?php
    require_once 'database.php';
    $querry="SELECT * FROM student ORDER BY `sum` DESC";
    $data=$pdo->prepare($querry);
    $data->execute();
    $res=$data->fetchAll();
    $place=1;
    $unic = $_COOKIE['unic'];
    $login=$_COOKIE['login'];
    $mainblock="<div> <a href = 'profile.php'> Ваш профиль <a/> </div> "; 
    $exitblock="<div> <a href = 'list.php?exit=1'> Выйти из аккаунта <a/> </div> ";
    if (isset($_GET['exit'])){
        setcookie('login',$login,time()-1);
        setcookie('unic',$unic,time()-1);
        header('Location:login.php');
        die();
    }
    echo $mainblock;
    setcookie('login',1,time()+3600*3);

    foreach ($res as $key=>$value){
        echo "<h5>{$place}</h5>";
        if ($value['unical']==$unic){
            echo 'Вы:'.'</br>';
        }    
        echo '<hr>';
        echo "<ul><li> Имя студента:{$value['name']} </li>";
        echo"<li> Фамилия студента:{$value['sername']} </li>";
        echo"<li> Отчество студента:{$value['otec']} </li>";
        echo "<li> Баллы студента:{$value['sum']} </li>";
        echo "<li> Направление студента:{$value['direction']} </li>";
        echo '</ul>';
        echo '<hr>';
        $place++;
    }
    echo $exitblock;
    die();
    ?>
</body>
</html>