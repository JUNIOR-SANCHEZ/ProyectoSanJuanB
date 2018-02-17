

<div class="contenedor-login">
    <img src="{$_layoutParams.root}public/img/User-icon.png" alt="">
    <form action="{$_layoutParams.root}login" method="POST">
        <input type="hidden" name="enviar" value="1"/>
        <div class="form-inputs">
            <input type="text" id="usuario" class="login-inputs" name="txt_usuario" placeholder="Usuario" value="{if isset($datos)} {$datos.txt_usuario}{/if}">
        </div>
        <div class="form-inputs">
            <input type="password" id="clave" class="login-inputs" name="txt_pass" placeholder="Contraseña" value="{if isset($datos)}) {$datos.txt_pass} {/if}">
        </div>

        <input class="btn-Ingresar" type="submit" value="ENTRAR"/>
        <br>
        <br>
        <a href="{$_layoutParams.root}registro">¿Necesitas una cuenta?</a>
    </form>
</div>