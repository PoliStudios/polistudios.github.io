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

    // Verificar campos obligatorios
    $camposRequeridos = ['nombre', 'apPat', 'apMat', 'direccion', 'telefono', 'cp', 'colonia', 'alcaldia'];
    foreach ($camposRequeridos as $campo) {
        if (!isset($_POST[$campo]) || empty(trim($_POST[$campo]))) {
            throw new Exception("Falta el campo requerido: $campo");
        }
    }

    // Obtener y limpiar datos
    $nombre    = trim($_POST['nombre']);
    $ePat     = trim($_POST['apellidoP']);
    $AmAT      = trim($_POST['apelldioM']);
    $Direccion      = trim($_POST['direccion']);
    $Telefono  = trim($_POST['telofono']);
    $CP = trim($_POST['codigoPo']);
    $Colonia  = trim($_POST['colonia']);
    $Alcaldia  = trim($_POST['alacaldia']);

    // Preparar e insertar datos
    $stmt = $dbh->prepare("INSERT INTO Usuarios VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $aPaT);
    $stmt->bindParam(3, $AmAT);
    $stmt->bindParam(4, $Direccion);
    $stmt->bindParam(5, $Telefono);
    $stmt->bindParam(6, $CP);
    $stmt->bindParam(7, $Colonia);
    $stmt->bindParam(8, $Alcaldia);
    $stmt->execute();

    // Redirigir tras unos segundos (seguro)
    echo '<meta http-equiv="refresh" content="2;url=/">';
    exit;

} catch (PDOException $e) {
    echo "❌ Error de base de datos: " . $e->getMessage();
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>