<?php

session_start();

include_once '../yt_colors/conexion.php';

$usuario_login= $_POST['nombre_usuario'];
$contrasena_login = $_POST['contrasena'];


$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();


if(!$resultado){
    echo 'No existe usuario';
    die();
}

if(password_verify($contrasena_login, $resultado["contrasena"])){
    // Las contraseñas son iguales
    $_SESSION['admin']=$usuario_login;
    header('Location: restringido.php');
}else{
    echo 'No son iguales las contraseñas';
    die();
}

echo 'Existe usuario';