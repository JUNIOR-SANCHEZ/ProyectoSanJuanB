<?php

require_once ROOT . "libs" . DS . "smarty" . DS . "libs" . DS . "Smarty.class.php";

class View extends Smarty {

    private $_controlador;
    private $_js;
    private $_template;

    public function __construct(Request $peticion) {
        parent::__construct();
        $this->_controlador = $peticion->getControlador();
        $this->_js = array();
        $this->_template=DEFAULT_LAYOUT;
    }

    public function renderizar($vista, $item = false) {
        $this->template_dir = ROOT . "views" . DS . "layout" . DS . $this->_template . DS;
        $this->config_dir = ROOT . "views" . DS . "layout" . DS . $this->_template . DS . "configs" . DS;
        $this->cache_dir = ROOT . "tmp" . DS . "cahe" . DS;
        $this->compile_dir = ROOT . "tmp" . DS . "template" . DS;
        $menu = array(
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'class'=>'icon-home',
                'enlace' => BASE_URL
            ),
            array(
                'id' => 'fundacion',
                'titulo' => 'Nuestra Fundacion',
                'class'=>'icon-book-open',
                'enlace' => BASE_URL.'fundacion'
            ),
            array(
                'id' => 'grupo',
                'titulo' => 'Nuestro Grupo',
                'class'=>'icon-book-open',
                'enlace' => BASE_URL.'grupo'
            ),
            array(
                'id' => 'contactos',
                'titulo' => 'Contactenos',
                'class'=>'icon-target',
                'enlace' => BASE_URL."contactos"
            ),
            array(
                'id' => 'ver',
                'titulo' => 'Ver',
                'class'=>'icon-target',
                'enlace' => BASE_URL
            )
        );

        if (Session::get('autenticado')) {
            $menu[] = array(
                'id' => 'login',
                'titulo' => 'Cerrar Session',
                'class'=>'icon-addres',
                'enlace' => BASE_URL . 'login/cerrar'
            );
        } else {
            $menu[] = array(
                'id' => 'login',
                'titulo' => 'Iniciar Session',
                'class'=>'icon-addres',
                'enlace' => BASE_URL . 'login'
            );
        }

        $js = array();
        if (count($this->_js)) {
            $js = $this->_js;
        }


        $params = array(
            'ruta_css' => BASE_URL . 'views/layout/' . $this->_template . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . $this->_template . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . $this->_template . '/js/',
            'item'=>$item,
            'js' => $js,
            'menu' => $menu,
            'root'=>BASE_URL,
            'configs'=>array(
                'app_name'=>APP_NAME,
                'app_slogan'=>APP_SLOGAN,
                'app_company'=>APP_COMPANY,
            )
        );

        $rutaView = ROOT . "views" . DS . $this->_controlador . DS . $vista . ".tpl";

        if (is_readable($rutaView)) {
            $this->assign("_contenido",$rutaView);
        } else {
            throw new Exception("Error dela vista");
        }
        $this->assign("_layoutParams",$params);
        $this->display("template.tpl");
    }

    public function setJs(array $js) {

        if (is_array($js) && count($js)) {
            for ($i = 0; $i < count($js); $i++) {
                $this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception("Error js");
        }
    }
    
    public function setTemplate($template){
        $this->_template = $template;
    }

}
