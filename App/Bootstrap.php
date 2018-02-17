<?php

class Bootstrap {

    public static function run(Request $peticion) {
        $contoller = $peticion->getControlador() . "Controller";
        $rutaControlador = ROOT . "controllers" . DS . $contoller . ".php";
        $metodo = $peticion->getMetodo();
        $args = $peticion->getArgs();
        
        if (is_readable($rutaControlador)) {
            
            require_once $rutaControlador;
            $contoller = new $contoller;

            if (is_callable(array($contoller, $metodo))) {
                $metodo = $peticion->getMetodo();
            } else {
                $metodo = "index";
            }

            if (isset($args)) {
                call_user_func_array(array($contoller, $metodo), $args);
            } else {
                call_user_func(array($contoller, $metodo));
            }
        } else {
            throw new Exception("no encontrado");
        }
    }

}
