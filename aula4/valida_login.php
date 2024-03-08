<?php

session_start();

include'Controllers/LoginController.php';

$loginContr = new \Controller\LoginController();
$loginContr->autenticar($_POST['email'],$_POST['senha']);


?>