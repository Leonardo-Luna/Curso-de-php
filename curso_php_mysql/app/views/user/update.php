<?php

require "php/main.php";

$id = (isset($_GET["user_id_update"])) ? limpiar($_GET["user_id_update"]) : 0;

?>

<section class="hero is-small is-primary">
    <div class="hero-body">
        <?php if($id != $_SESSION["id"]) { ?>
            <p class="title">Usuarios</p>
            <p class="subtitle">Actualizar usuario</p>
        <?php } 
        else { ?>
            <p class="title">Mi cuenta</p>
            <p class="subtitle">Actualizar datos personales</p>
        <?php } ?>
    </div>
</section>

<div class="container pb-3 pt-3">

    <?php

    include "inc/btn_back.php";

    $verificarUsuario = conexion();
    $verificarUsuario = $verificarUsuario->query("SELECT * FROM usuario WHERE usuario_id = '$id'");
            
    if($verificarUsuario->rowCount() > 0) {

        $datos = $verificarUsuario->fetch();

    ?>

        <div class="form-rest pt-3 pb-3"></div>

        <form action="php/user/update.php" method="POST" class="FormularioAjax" autocomplete="off" >

            <div class="box">
                <input type="hidden"  value="<?php echo $datos["usuario_id"]; ?>" name="usuario_id" required>
                
                <div class="columns">
                    <div class="column">
                        <div class="control">
                            <label>Nombres</label>
                            <input class="input" type="text" value="<?php echo $datos["usuario_nombre"]; ?>" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                        </div>
                    </div>
                    <div class="column">
                        <div class="control">
                            <label>Apellidos</label>
                            <input class="input" type="text" value="<?php echo $datos["usuario_apellido"]; ?>" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="control">
                            <label>Usuario</label>
                            <input class="input" type="text" value="<?php echo $datos["usuario_usuario"]; ?>" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
                        </div>
                    </div>
                    <div class="column">
                        <div class="control">
                            <label>Email</label>
                            <input class="input" type="email" value="<?php echo $datos["usuario_email"]; ?>" name="usuario_email" maxlength="70" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box mt-6">
                <h5 class="title is-6 has-text-centered is-uppercase">Solo ingrese la clave si desea actualizarla</h5>
                <div class="columns">
                    <div class="column">
                        <div class="control">
                            <label>Clave</label>
                            <input class="input" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
                        </div>
                    </div>
                    <div class="column">
                        <div class="control">
                            <label>Repetir clave</label>
                            <input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
                        </div>
                    </div>
                </div>
            </div>

            <div class="box mt-6">
                
                <h5 class="title is-6 has-text-centered is-uppercase">Ingrese sus credenciales para guardar los cambios</h5>

                <div class="field">
                    <label class="label">Usuario</label>
                    <p class="control has-icons-left">
                        <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" placeholder="Nombre de usuario" required >
                        <span class="icon is-small is-left">
                            <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <label class="label">Clave</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" placeholder="Contraseña" required >
                        <span class="icon is-small is-left">
                            <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                        </span>
                    </p>
                </div>
                <p class="has-text-centered">
                    <button type="submit" class="button is-success">Actualizar</button>
                </p>
            </div>

        </form>

    <?php
    }
    else {
        include "inc/error_alert.php";
    }
    $verificarUsuario = NULL;
    ?>

</div>