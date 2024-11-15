<?php
ob_start(); // sirve para que no se muestre el contenido de la página hasta que se haya procesado todo el código PHP

// Si la petición es una petición AJAX
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //conectar a base de datos
    require_once('cone.php');

    $conect = new basedatos;
    $conect->conectarBD();

    // Comprobar existencia de claves en $_POST
    $template_tipo = isset($_POST['template_tipo']) ? mysqli_real_escape_string($conect->conectarBD(), $_POST['template_tipo']) : '';
    $template_acceso = isset($_POST['template_acceso']) ? mysqli_real_escape_string($conect->conectarBD(), $_POST['template_acceso']) : '';

    $id_usuario = mysqli_real_escape_string($conect->conectarBD(), $_POST['id_usuario']);
    $template_nombre = mysqli_real_escape_string($conect->conectarBD(), $_POST['template_nombre']);
    $template_email = mysqli_real_escape_string($conect->conectarBD(), $_POST['template_email']);

    $contra = !empty($_POST['template_contra']) ? mysqli_real_escape_string($conect->conectarBD(), $_POST['template_contra']) : null;

    // Actualizar usuario con o sin contraseña
    if ($contra) {
        $consulta = "UPDATE usuarios SET nombre='$template_nombre', mail='$template_email', tipo='$template_tipo', acceso='$template_acceso', contra='$contra' WHERE id='$id_usuario'";
    } else {
        $consulta = "UPDATE usuarios SET nombre='$template_nombre', mail='$template_email', tipo='$template_tipo', acceso='$template_acceso' WHERE id='$id_usuario'";
    }

    // Ejecutar consulta
    if (mysqli_query($conect->conectarBD(), $consulta)) {
        echo json_encode(array('error' => false, 'mensaje' => 'Usuario actualizado correctamente'));
    } else {
        $dataerror = mysqli_error($conect->conectarBD());
        echo json_encode(array('error' => true, 'dataerror' => $dataerror));
    }

    // Vaciar datos
    mysqli_close($conect->conectarBD());
} //cerrar la petición AJAX

ob_end_flush(); // sirve para que se muestre el contenido de la página después de que se haya procesado todo el código PHP
?>
