<?php


    
if(isset($_GET["pg"])){
    $url = $_GET["pg"] . 'Controller';
    if (file_exists('Controllers/' . $url . '.php')) {
        include('controllers/'.$url.'.php');
        $controler = new $url;
        $controler->render();
    }
    else{
        echo "<h1>404<h1>";
    }
}
else{
    include('controllers/LoginController.php');
    $controler = new LoginController();
    $controler->render();
}

?>
