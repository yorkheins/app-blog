<?php
function show_error($errores, $campo)
{
    $alert = '';
    if (isset($errores[$campo]) && empty([$campo])) {
        $alert = '<div class="alert alert-danger">' . $errores[$campo] . '</div>';
    }

    return $alert;
}

function dim_error(){
    $_SESSION['errores']=null;
    $efface= session_unset($_SESSION['errores']);
    return $efface;
}

