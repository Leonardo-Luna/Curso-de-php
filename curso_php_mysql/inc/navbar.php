<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?view=home">
        <img src="./img/logo.png">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">

        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Usuarios</a>

            <div class="navbar-dropdown">
                <a class="navbar-item" href="index.php?view=user/list">Lista</a>
                <a class="navbar-item" href="index.php?view=user/search">Buscar</a>
            </div>
        </div>

        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Categorías</a>

            <div class="navbar-dropdown">
                <a class="navbar-item">Nueva</a>
                <a class="navbar-item">Lista</a>
                <a class="navbar-item">Buscar</a>
            </div>
        </div>

        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Productos</a>

            <div class="navbar-dropdown">
                <a class="navbar-item">Nuevo</a>
                <a class="navbar-item">Lista</a>
                <a class="navbar-item">Categorías</a>
                <a class="navbar-item">Buscar</a>
            </div>
        </div>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-info">
            <strong>Mi cuenta</strong>
          </a>
          <a class="button is-light" href="index.php?view=user/logout">Salir</a>
        </div>
      </div>
    </div>
  </div>
</nav>