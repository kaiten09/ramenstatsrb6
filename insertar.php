<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

// Conectar a la base de datos
$conexion = odbc_connect("Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\Users\herrera.g.12\OneDrive - Procter and Gamble\Desktop\ramendatos1.accdb", "", "");

// Insertar los datos en la tabla 'usuarios'
$sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
odbc_exec($conexion, $sql);

// Cerrar la conexión a la base de datos
odbc_close($conexion);

// Redirigir al usuario de vuelta a la página principal
header('Location: index.html');
?>

