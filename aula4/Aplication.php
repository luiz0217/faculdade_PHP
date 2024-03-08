<?php
class Aplication
{
    public function executar()
    {
        session_start();
        // print_r($_SESSION);

        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Login';
        $url = ucfirst($url);
        $url .= "Controller";
        echo $url;
        if (file_exists('Controllers/' . $url . '.php')) {
            if (isset($_SESSION['login']) || $url == 'LoginController') {
                $className = 'Controllers\\' . $url;
                $controller = new $className();
                $controller->executar();
            } 
            else {
                include "Views/404.php";
                die();
            }
        } 
        else {
            include "Views/404.php";
            die();
        }
    }
}


?>