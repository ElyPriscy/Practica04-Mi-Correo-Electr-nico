<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar datos de persona</title>
</head>
<body>

<?php

session_start();     
if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){ 
    header("Location: /SistemaDeGestion/public/vista/login.html");             
} 

//incluir conexion a la base de datos
include '../../../config/conexionBD.php';

$codigo = $_POST["codigo"];
//se se va a eliminar fisicamente el registro de la tabla
//$sql="DELETE FROM usuario WHERE codigo = '$codigo'";

date_default_timezone_set("America/Guayaquil");
$fecha = date('Y-m-d H:i:s',time());
$sql = "UPDATE usuario SET usu_eliminado = 'S',usu_fecha_modificacion='$fecha' WHERE usu_codigo=$codigo";

if($conn->query($sql)===TRUE){
    echo"<p>Se han eliminado los datos correctamente!</p>"; 

}else{
    echo"<p>Error:".$sql."<br>".mysqli_error($conn)."</p>";
}
echo"<a href='../../vista/usuario/index.php'>Regresar</a>";
    
$conn->close();
?>
</body>
</html>