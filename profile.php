<?php
require_once 'database.php';
$ident=$_COOKIE['unic'];
$data=$pdo->query("SELECT * FROM `student` WHERE `unical`= '$ident'");
$res=$data->fetchAll();
$name=$res[0]['name'];
$sername=$res[0]['sername'];
$idfordelete=$res[0]['id'];
if (!empty($_POST['direction1'])){//смена направления
        $zn=$_POST['direction1'];
        $pdo->query("UPDATE `student` SET `direction`= '$zn' WHERE `id`='$idfordelete'");
        header('Location:profile.php');
        die();//сделал одинаковые неймы потому что они должны сбрасываться если тыкнуть несколько и должны нормально отправляться + это меньше строк кода
}
if (!empty($_GET['delete'])){//удаление профиля
    $pdo->query("DELETE FROM `student` WHERE `id`='$idfordelete'");
    setcookie('unic',$ident,time()-1);
    setcookie('login',1,time()-1);
    setcookie('registration',1,time()-1);
    header('Location:login.php');
    die();//сделал одинаковые неймы потому что они должны сбрасываться если тыкнуть несколько и должны нормально отправляться + это меньше строк кода

}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
<p>Здравствуйте <?=$name.' '.$sername?></p>
<p>Если вы хотите поменять направление,выберите новое поле</p>
    <form action="profile.php" method="post">
        <input type="radio" id="direction1" name="direction1" value="Прикладная Математика">
        <label for="direction1"> Прикладная Математика</label><br>
        <input type="radio" id="direction2" name="direction1" value="Прикладная Информатика">
        <label for="direction2"> Прикладная Информатика</label><br>
        <input type="radio" id="direction3" name="direction1" value="ИВТ">
        <label for="direction3"> ИВТ </label><br>
        <input type="submit"/>
    </form>
<p><a href="list.php">Вернуться к списку Студентов</a></p>
<p><a href="profile.php?delete=1"> УДАЛИТЬ ПРОФИЛЬ </a></p>
</body>
</html>