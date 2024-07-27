<section class="hero is-small is-primary">
    <div class="hero-body">
        <p class="title">Usuarios</p>
        <p class="subtitle">Búsqueda de usuarios</p>
    </div>
</section>

<div class="container pb-3 pt-3">

<?php
require_once "php/main.php";

if(isset($_POST["modulo_buscador"])) {
    require_once "php/search.php";
}

if(!isset($_SESSION["busqueda_usuario"]) && empty($_SESSION["busqueda_usuario"])) {
?>

    <div class="columns">
        <div class="column">
            <form action="" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="usuario">   
                <div class="field is-grouped">
                    <p class="control is-expanded">
                        <input class="input is-info" type="text" name="txt_buscador" placeholder="Ingrese el término de búsqueda" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30" >
                    </p>
                    <p class="control">
                        <button class="button is-info" type="submit" >Buscar</button>
                    </p>
                </div>
            </form>
        </div>
    </div>

<?php
}
else {
?>

    <div class="columns">
        <div class="column">
            <form class="has-text-centered" action="" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="usuario"> 
                <input type="hidden" name="eliminar_buscador" value="usuario">
                <p class="mb-1">Filtrando por <strong><?php echo $_SESSION["busqueda_usuario"]; ?></strong>...</p>
                <button type="submit" class="button is-danger">Eliminar busqueda</button>
            </form>
        </div>
    </div>

<?php 

    if(isset($_GET["user_id_delete"])) {
        require_once "php/user/delete.php";
    }

    if(!isset($_GET["page"])) {
        $pagina = 1;
    }
    else {
        $pagina = (int) $_GET["page"];
        if($pagina <= 1) {
            $pagina = 1;
        }
    }

    $pagina = limpiar($pagina);
    $url = "index.php?view=user/search&page=";
    $registros = 10;
    $busqueda = $_SESSION["busqueda_usuario"];

    require_once "php/user/list.php";

} ?>

</div>