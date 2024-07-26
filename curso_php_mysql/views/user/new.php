<section class="hero is-small is-primary">
    <div class="hero-body">
        <p class="title">Usuarios</p>
        <p class="subtitle">Nuevo usuario</p>
    </div>
</section>

<div class="container">

	<div class="form-rest pt-3 pb-3"></div>

	<form class="FormularioAjax" action="./php/user/new.php" method="POST" autocomplete="off">
		
        <div class="columns">
                <div class="column">
                    <div class="control">
                        <label>Nombre</label>
                        <input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                    </div>
                </div>
                <div class="column">
                    <div class="control">
                        <label>Apellido</label>
                        <input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="control">
                        <label>Usuario</label>
                        <input class="input" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
                    </div>
                </div>
                <div class="column">
                    <div class="control">
                        <label>Correo electrónico</label>
                        <input class="input" type="email" name="usuario_email" maxlength="255" required>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="control">
                        <label>Clave</label>
                        <input class="input" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                    </div>
                </div>
                <div class="column">
                    <div class="control">
                        <label>Repetir clave</label>
                        <input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                    </div>
                </div>
            </div>
        </div>

		<p class="has-text-centered pt-5">
			<button type="submit" class="button is-info">Registrarse</button>
		</p>

	</form>
</div>