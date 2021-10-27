<?php
// recoger valores del formulario de registro
session_start();
if (isset($_POST['POST'])){
    $nombre = isset ($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $errores = array();
// Validacion de variables
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match('/ [0-9]/', $nombre)){
        $validate_name = true;
    }else{
        $validate_name = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match('/ [0-9]/', $apellidos)){
        $validate_last_name = true;
    }else{
        $validate_last_name = false;
        $errores['apellidos'] = "Los  apellidos no son válidos";
    }
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $validate_email = true;
    }else{
        $validate_email = false;
        $errores['email'] = "El E-mail no es válido";
    }
    if(!empty($password)){
        $validate_password = true;
    }else{
        $validate_password = false;
        $errores['password'] = "La password no puede ser vacía";
    }
    $save_user = false;
    if(count($errores) == 0){
        $save_user = true;
    }else{
        $_SESSION['errores'] = $errores;
        header("Location:index.php");
    }

}
?>