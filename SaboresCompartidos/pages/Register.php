<?php
include_once '../scripts/config.php';

$title = "Registro";
$menu = 4;
?>

<?php include ROOT."extend/top.php";?>

 <div class="container py-5" style="max-width: 900px;">
    <h2 class="mb-4 text-center">Formulario de Registro</h2>
    <form method="POST" action="scripts/conexion.php">
        <div class="row mb-4">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="col-md-4">
                <label for="apellidoP" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoP" name="apellidoP" required>
            </div>
            <div class="col-md-4">
                <label for="apellidoM" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoM" name="apelldioM" required>
            </div>
        </div>
        <div class="row mb-4 mt-4">
            <div class="col-md-8">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="col-md-4">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <label for="codigoPostal" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigoPostal" name="codigoPo" required>
            </div>
            <div class="col-md-4">
                <label for="colonia" class="form-label">Colonia</label>
                <input type="text" class="form-control" id="colonia" name="colonia" required>
            </div>
            <div class="col-md-4">
                <label for="alcaldia" class="form-label">Alcaldía</label>
                <input type="text" class="form-control" id="alcaldia" name="alcaldia" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success w-100">Registrarse</button>
    </form>
</div>

<?php include ROOT."extend/bottom.php";?>