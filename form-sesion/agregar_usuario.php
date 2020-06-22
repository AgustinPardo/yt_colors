<?php

include_once '../yt_colors/conexion.php';

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

if($resultado){
    echo 'Existe el usuario';
    die();
}

$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

if (password_verify($contrasena2, $contrasena)) {
    echo '¡La contraseña es válida!';

    $sql_agregar = 'INSERT INTO usuarios (nombre,contrasena) VALUES (?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);

    if($sentencia_agregar->execute(array($usuario_nuevo,$contrasena))){
        echo '<br>Agregado<br>';
    }else{
        echo '<br>Error<br>';
    }
    

    $sentencia_agregar = null;
    $pdo = null;

    header('location:registro.php');

} else {
    echo 'La contraseña no es válida.';
}
