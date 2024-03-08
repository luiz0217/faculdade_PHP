<?php

$autoload = function($class){
    echo $class . '<br>';
    include($class.'.php');
};

spl_autoload_register($autoload);

include"config/config.php";


$app = new Aplication();
$app->executar();




?>
