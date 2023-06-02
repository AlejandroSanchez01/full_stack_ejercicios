<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'mi_proyecto';

// Establecer la conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar si la conexión fue exitosa
if ($conexion->connect_errno) {
    die('Error en la conexión: ' . $conexion->connect_error);
}

// Si la conexión fue exitosa, puedes realizar consultas a la base de datos
// Ejemplo de consulta
$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);

// Crear una variable para almacenar los datos de todas las filas
$datos = '';

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Procesar los resultados de la consulta
    while ($fila = $resultado->fetch_assoc()) {
        // Concatenar los datos de cada fila en la variable $datos
        $datos .= $fila['id'] . "," . $fila['nombre'] . ',' . $fila['apellido'] . ','. $fila['cedula'] . '<br>';
    }
} else {
    // Manejar el caso de error en la consulta
    echo 'Error en la consulta: ' . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
//print ($datos);
header('Location: pagina.html?datos=' . urlencode($datos));
exit(); 
?>
