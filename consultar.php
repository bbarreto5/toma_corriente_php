<?php
include("conexion.php");
$id = $_GET ['id'];
$sql = "SELECT `ip`,`estado` FROM `esp8266` WHERE '$id'=id;";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo $row['estado'];
    break;
}
?>