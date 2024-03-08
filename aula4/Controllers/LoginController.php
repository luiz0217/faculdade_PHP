<?php
namespace Controller;
require_once"models/User.php";

class LoginController
{
    private $users;
    public function __construct() {
        $this->users = [
            new \User(1,'Luiz@L.com','123',1),
            new \User(2,'Leo@L.com','123',2),
            new \User(3,'Tiagoepitanga10@gmail.com','123',2),
            new \User(4,'Bruno@gmail.com','123',2)
        ];
    }

    public function autenticar($email,$pass) {
        foreach ($this->users as $key => $value) {
            if($value->email == $email && $value->pass == $pass){
                session_start();
                $_SESSION["email"] = $value->email;
                $_SESSION["id"] = $value->id;
                $_SESSION["admin"] = $value->prof_id;
                header('Location: ../aula4/index.php');
                exit;
            }
            header('Location: ../aula4/404.php');
        }
    }

    public function executar(){
        
    }
}


