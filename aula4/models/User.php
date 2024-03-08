<?php

class User
{
    public $id;
    public $email;
    public $pass;
    public $prof_id;

    public function __construct($id, $email, $pass, $prof_id) {
        $this->id = $id;
        $this->email = $email;
        $this->pass = password_hash($pass,PASSWORD_DEFAULT);
        $this->prof_id = $prof_id;
    }

    public function verificarSenha($pass){
        return password_verify($pass,$this->pass);
    }
}
