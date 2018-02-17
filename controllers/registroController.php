<?php

class registroController extends Controller{
    
    private $_sqlUser;
    private $_template = "login";
    public function __construct() {
        parent::__construct();
        $this->_sqlUser = $this->loadModel("registro");
        $this->_view->setTemplate($this->_template);
    }
    public function index() {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->assign("titulo","Registro");
        
        if($this->getInt("enviar") == 1){
            $this->_view->assign("datos",$_POST);
            if(!$this->getSql("txt_nombre")){
                $this->_view->assign("error","Debe introducir  su nombre");
                $this->_view->renderizar("index","registro");
                exit;
            }
            if(!$this->getAlphaNum("txt_usuario")){
                $this->_view->assign("error","Debe introducir  el usuario");
                $this->_view->renderizar("index","registro");
                exit;
            }
            if($this->_sqlUser->checkUser($this->getAlphaNum("txt_usuario"))){
                $this->_view->assign("error","El usuario ". $this->getAlphaNum("txt_usuario") ." ya exite.");
                $this->_view->renderizar("index","registro");
                exit;
            }
            
            if(!$this->checkEmail($this->getPostParam("txt_correo"))){
                $this->_view->assign("error","El correo es invalido");
                $this->_view->renderizar("index","registro");
                exit;
            }
            
            if($this->_sqlUser->checkEmail($this->getPostParam("txt_correo"))){
                $this->_view->assign("error","El correo ". $this->getPostParam("txt_correo") . " ya exite");
                $this->_view->renderizar("index","registro");
                exit;
            }
            if(!$this->getSql("txt_pass")){
                $this->_view->assign("error","Debe introducir  una contraseña");
                $this->_view->renderizar("index","registro");
                exit;
            }
            if($this->getPostParam("txt_pass") != $this->getPostParam("txt_passConfirmar")){
                $this->_view->assign("error","Las contraseñas no coinciden");
                $this->_view->renderizar("index","registro");
                exit;
            }
            
            $this->_sqlUser->addUser(
                    $this->getSql("txt_nombre"),
                    $this->getAlphaNum("txt_usuario"),
                    $this->getPostParam("txt_pass"),
                    $this->getPostParam("txt_correo")
                    );
            if(!$this->_sqlUser->checkUser($this->getAlphaNum("txt_usuario"))){
                $this->_view->assign("error","Error al registrar el usuario.");
                $this->_view->renderizar("index","registro");
                exit;
            }
            $this->_view->datos=false;
            $this->_view->assign("mensaje","El usuario se registro con exito.");
            $this->_view->renderizar("index","registro");
        }
        
        $this->_view->renderizar('index','registro');
    }
    
    
}