<?php /* Smarty version Smarty-3.1.8, created on 2018-02-17 07:48:07
         compiled from "C:\xampp\htdocs\SanJuan\views\layout\default\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9256318055a84a1bea287c7-76862174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdfeb129b6d692ff15c8c5884c2956314d4eb9d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuan\\views\\layout\\default\\template.tpl',
      1 => 1518850077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9256318055a84a1bea287c7-76862174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a84a1bec61426_64049093',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'menu' => 0,
    'error' => 0,
    'mensaje' => 0,
    '_contenido' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a84a1bec61426_64049093')) {function content_5a84a1bec61426_64049093($_smarty_tpl) {?><html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
 </title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/miestilo.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/mdb.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/iconos/css/fontello.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/ihover.css">
        <!--------------------------------------------------------------------------------->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/grupo_trabajo.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/alertify.js-0.3.11/themes/alertify.core.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/alertify.js-0.3.11/themes/alertify.default.css">
    </head>

    <body>
        <header>
            <div class="contenedor-menu">
                <input type="checkbox" id="icono-barra">
                <label class="icon-th-list" for="icono-barra"></label>
                <h2>MENU</h2>
                <p>
                    <font color="white"> ¿Necesitas informacion? &nbsp<span class="icon-phone"></span>&nbsp(+593) 999187456 &nbsp<span class="icon-mail"></span>fundacion_bautista@gmail.com</font>
                </p>
                <nav class="menu-nav">
                    <ul>
                        <!--aria-hidden="true"-->
                        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])){?>
                            
                        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['enlace'];?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['class'];?>
" ></span><?php echo $_smarty_tpl->tpl_vars['menu']->value['titulo'];?>
</a></li>
                          <?php } ?>
                        
                         <?php }?>
                    </ul>
                </nav>
            </div>
        </header>

        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?><div id="error"> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 </div> <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?><div id="mensaje"> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
 </div> <?php }?>
        
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        

<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
    <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
    <?php } ?>
<?php }?>

        
        <footer>
    <section>
        <center>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logo.png" alt=""></center>
    </section>
    <section id="contacto">
        <h2>CONTÁCTENOS
            <hr>
        </h2><br>
        <p>Fundación de Desarrollo "SAN JUAN BAUTISTA" <br>DIRECCION: Eloy Alfaro y Av. Machala <br> CELULAR: (+593) 999187456 <br> EMAIL: fundacion_bautista@gmail.com <br> El Guabo, El Oro, Ecuador</p>

    </section>

    <section id="siguenos">
        <h2>SÍGUENOS</h2>
        <hr><br><br>
        <div class="face">
            <a href="#"></a>
        </div>
        <div class="email">
            <a href="#"></a>
        </div>
        <div class="twitter">
            <a href="#"></a>
        </div>
        <div class="instagram">
            <a href="#"></a>
        </div>
    </section>
        </footer>

</body>
</html>
<?php }} ?>