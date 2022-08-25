<?php 
	require_once "./headerExterno.php";
?>
    <section>
        <div class="cardR">
            <form method="post" action="./internas/ProcesarRegistros.php">
                <div class="grupoInput">
                    <label for="Nombres">Nombres</label>
                    <input type="text" name="Nombres" id="Nombres" placeholder="Ingrese sus Nombres">
                </div>
                <div class="grupoInput">
                    <label for="Apellidos">Apellidos</label>
                    <input type="text" name="Apellidos" id="Apellidos" placeholder="Ingrese sus Apellidos">
                </div>
                <div class="grupoInput">
                    <label for="Cedula">Cedula</label>
                    <input type="text" name="Cedula" id="Cedula" placeholder="Ingrese su Cedula">
                </div>
                <div class="grupoInput">
                    <label for="Correo">Correo</label>
                    <input type="email" name="Correo" id="Correo" placeholder="Ingrese su correo">
                </div>
                <div class="grupoInput">
                    <label for="Direccion">Direccion</label>
                    <input type="text" name="Direccion" id="Direccion" placeholder="Ingrese su Direccion">
                </div>
                <div class="grupoInput">
                    <label for="Telefono">Telefono</label>
                    <input type="tel" name="Telefono" id="Telefono" placeholder="Ingrese su Telefono">
                </div>
                <div class="grupoInput">
                    <label for="Pais">Pais</label>
                    <input type="text" name="Pais" id="Pais" placeholder="Ingrese su Pais">
                </div>
                <div class="grupoInput">
                    <label for="Ciudad">Ciudad</label>
                    <input type="text" name="Ciudad" id="Ciudad" placeholder="Ingrese su Ciudad">
                </div>
                <div class="grupoInput">
                    <label for="Institucion">Institucion</label>
                    <input type="text" name="Institucion" id="Institucion" placeholder="Ingrese su Institucion">
                </div>
                <div class="grupoInput">
                    <label for="Nombre_institucion">Nombre institucion</label>
                    <input type="text" name="Nombre_institucion" id="Nombre_institucion" placeholder="Ingrese Nombre institucion">
                </div>
                <div class="grupoInput">
                    <label for="Direccion_institucion">Direccion institucion</label>
                    <input type="text" name="Direccion_institucion" id="Direccion_institucion" placeholder="Ingrese Direccion institucion">
                </div>
                <div class="grupoInput">
                    <label for="Telefono_institucion">Telefono institucion</label>
                    <input type="tel" name="Telefono_institucion" id="Telefono_institucion" placeholder="Ingrese Telefono institucion">
                </div>
                <div class="grupoInput">
                    <label for="Ruc_institucion">Ruc institucion</label>
                    <input type="text" name="Ruc_institucion" id="Ruc_institucion" placeholder="Ingrese Ruc institucion">
                </div>
                
                <div class="grupoInput">
                 <button type="submit" value="Procesar" class="btn-submit">Registrar</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>