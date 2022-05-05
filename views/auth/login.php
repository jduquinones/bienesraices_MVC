<main class="contenedor seccion contenido-centrado">
    <h1>Inicniar Sesion</h1>

    <?php foreach($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

        <!-- email: correo@correo.com 
        password: 123456 -->

    <form method="POST" class="formulario" action="/login">
    <fieldset class="dark">
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Correo electronico" name="email" id="email">      
            
            <label for="password">Password</label>
            <input type="password" placeholder="Tu password" name="password" id="password">
        </fieldset>
        <input type="submit" value="Iniciar Sesion" class="boton-verde">
    </form>
</main>