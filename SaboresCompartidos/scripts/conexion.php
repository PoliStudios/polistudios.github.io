<?php
include_once "config.php";
// Activar reporte de errores (para depuración)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuración de conexión
$dbname = "skibidi";

  $dsn = "mysql:host=localhost;dbname=$dbname";//Conexion local
//$dsn = "mysql:host=sql109.iceiy.com;dbname=$dbname";

try {
    // Conectar a la base de datos
    $dbh = new PDO($dsn, MySQL_USER, MySQL_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectando a la base de datos... <br>";
    echo "Checando datos... <br>";

    // Verificar campos obligatorios
    $camposRequeridos = ['nombre', 'apellidoP', 'apelldioM', 'direccion', 'telefono', 'codigoPo', 'colonia', 'alcaldia'];
    foreach ($camposRequeridos as $campo) {
        if (!isset($_POST[$campo]) || empty(trim($_POST[$campo]))) {
            throw new Exception("Falta el campo requerido: $campo");
        }
    }
        echo "Datos correctos. <br>";

    // Obtener y limpiar datos
    $nombre    = trim($_POST['nombre']);
    $aPat     = trim($_POST['apellidoP']);
    $AmAT      = trim($_POST['apelldioM']);
    $Direccion      = trim($_POST['direccion']);
    $Telefono  = trim($_POST['telefono']);
    $CP = trim($_POST['codigoPo']);
    $Colonia  = trim($_POST['colonia']);
    $Alcaldia  = trim($_POST['alcaldia']);
        echo "Datos obtenidos <br>";


    // Preparar e insertar datos
    $stmt = $dbh->prepare("INSERT INTO toilet VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $aPat);
    $stmt->bindParam(3, $AmAT);
    $stmt->bindParam(4, $Direccion);
    $stmt->bindParam(5, $Telefono);
    $stmt->bindParam(6, $CP);
    $stmt->bindParam(7, $Colonia);
    $stmt->bindParam(8, $Alcaldia);
    $stmt->execute();

        echo "sql ejecutado <br>";


    // Redirigir tras unos segundos (seguro)
    echo '<meta http-equiv="refresh" content="2;url=/SaboresCompartidos/">';
    exit;

} catch (PDOException $e) {
    echo "❌ Error de base de datos: " . $e->getMessage();
} catch (Error $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>