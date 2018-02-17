<html>
    <head>
        <meta charset="UTF-8">
        <title>{$titulo|default:"Sin titulo"} </title>
        <link rel="stylesheet" href="css/miestilo.css">
  <link rel="stylesheet" href="iconos/css/fontello.css">

  

 

  
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        
        <!--------------------------------------------------------------------------------->
        <link rel="stylesheet" href="{$_layoutParams.root}public/css/miestilo.css">
        <link rel="stylesheet" href="{$_layoutParams.ruta_css}login.css">
          <link rel="stylesheet" href="{$_layoutParams.ruta_css}registro.css">
          <link rel="stylesheet" href="{$_layoutParams.root}public/iconos/css/fontello.css">
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

 <script src="{$_layoutParams.root}public/js/jquery.min.js"></script>
  <script src="{$_layoutParams.root}public/alertify.js-0.3.11/lib/alertify.js"></script>

</body>
</html>
