<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>    
    <?php
    session_start();     
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){ 
        header("Location: /SistemaDeGestion/public/vista/login.html");             
    } 
         $codigo = $_GET["codigo"];             
?>
 <form id="formulario01" method="POST" action="../../controladores/usuario/cambiar_contrasena.php">
    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
    
<label for="cedula">Contraseña Actual (*)</label>
<input type="password" id="contrasena1" name="contrasena1" value="" required placeholder="Ingrese su contraseña actual ..."/>
<br> 


 <label for="cedula">Contraseña Nueva (*)</label>
 <input type="password" id="contrasena2" name="contrasena2" value="" required placeholder="Ingrese su contraseña nueva ..."/>         
 <br>
<input type="submit" id="modificar" name="modificar" value="Modificar" />         
<input type="reset" id="cancelar" name="cancelar" value="Cancelar" />     
</form>
</body>
</html>