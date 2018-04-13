<?php
include("conexion.php");
$id = $_GET ['id'];
$ip = $_GET ['ip'];
$estado = $_GET ['estado'];
$sql = "UPDATE `esp8266` SET `ip`='$ip',`estado`='$estado' WHERE id='$id'";;
$result = $conn->query($sql);
$conn->close();
echo "Datos ingresados correctamente.";
?>