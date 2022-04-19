<?php
header('Content-Type: text/html; charset=utf-8', true);


class Student{
    private $name;
    private $sername;
    private $otec;
    private $mail;
    private $password;
    private $sum;
    private $direction;
    private $unical;
    function __construct($name,$sername,$otec,$mail,$password,$sum,$direction) {
        $this->name=$name;
        $this->sername=$sername;
        $this->otec=$otec;
        $this->mail=$mail;
        $this->password=md5($password);
        $this->sum=$sum;
        $this->direction=$direction;
        $this->unical=md5($mail);
    }
    
    public function sender(){
        try{
            require_once ('database.php');
            $querry="INSERT INTO student(`name`,`sername`,`otec`,`email`,`sum`,`direction`,`password`,`unical`) VALUES ('$this->name','$this->sername','$this->otec','$this->mail',$this->sum,'$this->direction','$this->password','$this->unical')";
            $data=$pdo->prepare($querry);
            $data->execute();
            unset($_POST);
            header('Location:login.php');
            die();
        }catch (PDOException $e){
            die('Подключение не удалось - '.$e->getMessage());
        }
    }
}
?>