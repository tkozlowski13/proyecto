<?php
    require_once("C:/xampp/htdocs/registro-login/controller/homeController.php");
    session_start();
    $obj = new homeController();
    $correo = $obj->limpiarcorreo($_POST['correo']);
    $contraseña = $obj->limpiarcadena($_POST['contraseña']);
    $bandera = $obj->verificarusuario($correo,$contraseña);
    if($bandera){
        $_SESSION['usuario'] = $correo;
        header("Location:panel_control.php");
    }else{
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:login.php?error=".$error);
    }
?>

