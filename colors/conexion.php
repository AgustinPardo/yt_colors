<?php

$link = 'mysql:host=localhost;dbname=yt_colores';
$usuario = 'root';
$pass = '';

try {
    // Me conecto a la base de datos
    $pdo = new PDO($link,$usuario,$pass);

    echo ' <br> Conectado <br>';
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>