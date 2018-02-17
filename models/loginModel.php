<?php

class loginModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function getUser($user,$pass){
        $rows = $this->_db->prepare("SELECT * FROM usuarios WHERE nick_usu=:user and password_usu=:pass;");
        
        $rows->bindParam(':user',$user, PDO::PARAM_STR);
        $rows->bindParam(':pass', Cifrado::getHash("sha1", $pass, HASH_KEY), PDO::PARAM_STR);
        $rows->execute();
        return $rows->fetch();
    }
}