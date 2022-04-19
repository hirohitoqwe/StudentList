<?php
if (isset($_COOKIE['registration'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Абитуриенты</title>
</head>
<body>
    <form action="check.php" method="post" name="registration">
        <label>Имя</label>
        <p><input type="text" name="name" required /></p>
        <label>Фамилия</label>
        <p><input type="text" name="sername" required /></p>
        <label>Отчество </label>
        <p><input type="text" name="otec" required /></p>
        <label>Email </label>
        <p><input type="email" name="mail" required /></p>
        <label>Пароль </label>
        <p><input type="password" name="password" required /></p>
        <label>Ваша сумма баллов ЕГЭ</label>
        <p><input type="number" name="sum" required /></p>
        <label>Направление</label>
        <p><input type="text" name="direction" required /></p>
        <p><input type="submit" /></p>
    </form>
    <p>Если у вас есть профиль перейдите по ссылке <a href="login.php"> click click </a></p>
</body>
</html>