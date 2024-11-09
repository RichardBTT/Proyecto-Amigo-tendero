<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Reemplaza con tu nombre de usuario MySQL
$password = ""; // Reemplaza con tu contraseña MySQL
$dbname = "amiten"; // Reemplaza con el nombre de tu base de datos

// Ajusta la conexión según sea necesario
if ($servername == "localhost") {
    $conn = new mysqli($servername, $username, $password, $dbname);
} else {
    // Si estás utilizando una conexión remota, ajusta esto
    $conn = new mysqli($servername, $username, $password, $dbname, null, "/path/to/mysqld.sock");
}

if ($conn->connect_error) {
    die("Falló la conexión: " . $conn->connect_error);
}

// Función para generar la tabla HTML
function generarTablaHTML($tabla) {
    global $conn;
    
    $query = "SELECT * FROM $tabla ORDER BY ID ASC";
    $result = $conn->query($query);
    
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead><tr>";
    $campos = array_keys($result->fetch_assoc());
    foreach ($campos as $campo) {
        echo "<th>$campo</th>";
    }
    echo "</tr></thead>";
    echo "<tbody>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($campos as $campo) {
            echo "<td>" . htmlspecialchars($row[$campo]) . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

// Generar la tabla solicitada
$tabla = $_GET['tabla'] ?? 'tenderos'; // Si no se especifica, usa 'tenderos'
generarTablaHTML($tabla);

$conn->close();
?>
