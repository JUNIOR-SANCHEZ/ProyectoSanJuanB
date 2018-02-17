<?php

//Defenimos los separadoares del directorio 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'App' . DS);


try {
    require_once APP_PATH . "Config.php";
    require_once APP_PATH . "Bootstrap.php";
    require_once APP_PATH . "Controller.php";
    require_once APP_PATH . "Model.php";
    require_once APP_PATH . "Registro.php";
    require_once APP_PATH . "Request.php";
    require_once APP_PATH . "View.php";
    require_once APP_PATH . "Database.php";
    require_once APP_PATH . "Session.php";
    require_once APP_PATH . "Cifrado.php";
    
//    echo Cifrado::getHash('sha1', '1234', HASH_KEY);exit;
    
    Session::init();

    Bootstrap::run(new Request());

    
} catch (Exception $ex) {

    echo $ex->getMessage();
}
