<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Registro de Usuarios</h3>
    <form action="agregar_usuario.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingrese Usuario">
        <input type="text" name="contrasena" placeholder="Ingrese Contraseña">
        <input type="text" name="contrasena2" placeholder="Ingrese Nuevamente la Contraseña">
        <button type="submit">Guardar</button>
    </form>

    <h3>Login</h3>
    <form action="login.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingrese Usuario">
        <input type="text" name="contrasena" placeholder="Ingrese Contraseña">
        <button type="submit">Ingresar</button>
    </form>

</body>
</html>