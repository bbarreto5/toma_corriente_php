<?php
include("conexion.php");
$id = $_GET ['id'];
$ip = $_GET ['ip'];
$estado = $_GET ['estado'];
$sql = "INSERT INTO `esp8266`(`id`, `ip`, `estado`) VALUES ('$id','$ip','$estado');";
$result = $conn->query($sql);
$conn->close();
echo "Datos ingresados correctamente.";
?>