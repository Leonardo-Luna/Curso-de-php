<section class="hero is-small is-primary">
    <div class="hero-body">
        <p class="title">Usuarios</p>
        <p class="subtitle">Lista de usuarios</p>
    </div>
</section>

<div class="container pb-3 pt-5">

    <?php

    require_once "php/main.php";

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
    $url = "index.php?view=user/list&page=";
    $registros = 10;
    $busqueda = "";

    require_once "php/user/list.php";

    ?>

</div>