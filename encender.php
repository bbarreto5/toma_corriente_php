<?php
include("conexion.php");
$id = $_GET ['id'];
$sql = "SELECT `ip`,`estado` FROM `esp8266` WHERE '$id'=id;";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "hola";
    if($row['estado'] == 1){
        $sql="UPDATE `esp8266` SET `estado`=0 WHERE id='$id';";
        $conn->query($sql);
        $conn->close();
        echo $row['ip'];
        header('Location:http://'.$row['ip'].'/led=0');
    }else{
        $sql="UPDATE `esp8266` SET `estado`=1 WHERE id='$id';";
        $conn->query($sql);
        $conn->close();
        header('Location:http://'.$row['ip'].'/led=1'); 
    }
}
?>