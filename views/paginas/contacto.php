<main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form action="" class="formulario" action="/contacto" method="POST">
            <fieldset class="dark">
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" name="contacto[nombre]" id="nombre" require>

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Correo electronico" name="contacto[email]" id="email" require>

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" name="contacto[telefono]" id="telefono">
                
                <label for="mensaje">Mensaje</label>
                <textarea name="contacto[mensaje]" id="mensaje" cols="" rows="" require></textarea>
            </fieldset>

            <fieldset class="dark">
                <legend>Informacion sobre Propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select name="contacto[tipo]" id="opciones" require>
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>                    
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" name="contacto[precio]" id="presupuesto" min="0" require>
            </fieldset>

            <fieldset class="dark">
                <legend>Contacto</legend>

                <p>Como desea ser Contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input type="radio" name="contacto[contacto]" id="contactar-telefono" value="telefono" require>

                    <label for="contactar-email">E-mail</label>
                    <input type="radio" name="contacto[contacto]" id="contactar-email" value="email" require>
                </div>  

                <p>Si eligio telefono elija la fecha y la hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date" name="contacto[fecha]" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" name="contacto[hora]" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>