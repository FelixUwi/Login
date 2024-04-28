<?php
session_start();
if (!empty($_POST["btningresar"])) {   // aqui llegan los datos que puso el usuario
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query(" select * from empleados where usuario='$usuario' and contraseña='$password' "); //esta es la conexion con la base de datos
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->Nombre;
            $_SESSION["apellidos"]=$datos->Apellidos;
            header("location: inicio.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";  //aqui se confirma si los datos son correctos o no, en dado caso q no le sale esa alerta
        }
        
    } else {
        echo "Por favor ingresar los datos correctamente"; //esto es por si envia algun campo vacio
    }
    
}

?>