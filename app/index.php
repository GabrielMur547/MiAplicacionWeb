<?php
$conn = new mysqli("mysql", "root", "clave123", "Secretaria_Administrativa");
// Verifica conexión
if ($conn->connect_error) {
	die("La conexión falló: " . $conn->connect_error);
}else echo "Conexión exitosa "."<br>";

$sql = "SELECT nombre, apellido FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// Datos de salida de cada registro
	while($row = $result->fetch_assoc()) {
		echo $row["nombre"].$row["apellido"]."<br>";
	}
} else {
	echo "Ningún resultado para la tabla usuarios";
}
$conn->close();
?>