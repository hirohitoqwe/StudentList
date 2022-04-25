<?php

class student{
    public static function sender($name,$sername,$otec,$mail,$password,$sum,$direction,$unical){
        try{
            require_once ('database.php');
            $querry="INSERT INTO student(`name`,`sername`,`otec`,`email`,`sum`,`direction`,`password`,`unical`) VALUES ('$name','$sername','$otec','$mail',$sum,'$direction','$password','$unical')";
            $pdo->query($querry);
            $querry2="SELECT 1 FROM student WHERE email ='$mail LIMIT 1'";
            $newdata=$pdo->query($querry2);
            if ($newdata>0){
                die('Что-то не так');
            }
            else{
                header('Location:login.php');
                die();
            }
            
        }catch (PDOException $e){
            die('Подключение не удалось - '.$e->getMessage());
        }
    }
}

?>