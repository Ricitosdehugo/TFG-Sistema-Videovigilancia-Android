<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="fotos/camera.ico">
    <title>Añadir Usuario</title>
<?php require_once 'estilos/estilos_agregar_usuario.php'; ?>
</head>
<body>
<div class="form-box">
    <h2>Añadir nuevo usuario</h2>
    <?php if ($mensaje) echo "<p class='success'>$mensaje</p>"; ?>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Nombre de usuario" maxlength="50" required>
        <input type="password" name="password" placeholder="Contraseña" maxlength="255" required>
        <button type="submit">Guardar usuario</button>
    </form>

    <div>
        <a href="dashboard.php">Inicio</a>
    </div>
</div>
</body>
</html>