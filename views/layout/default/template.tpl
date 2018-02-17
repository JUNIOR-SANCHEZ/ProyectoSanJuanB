<html>
    <head>
        <meta charset="UTF-8">
        <title>{$titulo|default:"Sin titulo"} </title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="{$_layoutParams.root}public/css/miestilo.css">
        <link rel="stylesheet" href="{$_layoutParams.root}public/css/mdb.css">
        <link rel="stylesheet" href="{$_layoutParams.root}public/iconos/css/fontello.css">
        <link rel="stylesheet" href="{$_layoutParams.root}public/css/ihover.css">
        <!--------------------------------------------------------------------------------->
        <link rel="stylesheet" href="{$_layoutParams.root}public/css/grupo_trabajo.css">
        <link rel="stylesheet" href="{$_layoutParams.root}public/alertify.js-0.3.11/themes/alertify.core.css">
        <link rel="stylesheet" href="{$_layoutParams.root}public/alertify.js-0.3.11/themes/alertify.default.css">
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
                        {if isset($_layoutParams.menu)}
                            
                        {foreach item=menu from=$_layoutParams.menu}
                            {strip}<li><a href="{$menu.enlace}"><span class="{$menu.class}" ></span>{$menu.titulo}</a></li>{/strip}
                          {/foreach}
                        
                         {/if}
                    </ul>
                </nav>
            </div>
        </header>

        {if isset($error)}<div id="error"> {$error} </div> {/if}
        {if isset($mensaje)}<div id="mensaje"> {$mensaje} </div> {/if}
        
        {include file=$_contenido}
        
        

{if isset($_layoutParams.js) && count($_layoutParams.js)}
    {foreach item=js from=$_layoutParams.js}
        <script src="{$js}" type="text/javascript"></script>
    {/foreach}
{/if}

        
        <footer>
    <section>
        <center>
            <img src="{$_layoutParams.root}public/img/logo.png" alt=""></center>
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
