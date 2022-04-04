<fieldset>
    <legend>Informacion General</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" name="vendedor[nombre]" id="nombre" placeholder="Nombre" value="<?php echo s($vendedor->nombre); ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" name="vendedor[apellido]" id="apellido" placeholder="Apellido" value="<?php echo s($vendedor->apellido); ?>">   
</fieldset>

<fieldset>
    <legend>Informacion Extra</legend>
    <label for="telefono">Telefono:</label>
    <input type="number" name="vendedor[telefono]" id="telefono" placeholder="Telefono" value="<?php echo s($vendedor->telefono); ?>">                 
</fieldset>

            