<?php
if (isset($_COOKIE['login'])){
    header('Location:list.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логин</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <form action="checklogin.php" method="post">
        <label> Email </label>
        <p><input type="text" name="mail" required/></p>
        <label> Пароль </label>
        <p><input type="password" name="pass" required/></p>
        <p><input type="submit" /></p>
    </form>
    <p>Если у вас нет профиля перейдите по ссылке <a href="index.php"> click click </a></p>
</body>
</html>