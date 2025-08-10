<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="fotos/camera.ico">
    <title>Eliminar Usuario</title>
<?php require_once 'estilos/estilos_eliminar_usuario.php'; ?>
</head>
<body>
<div class="form-box">
    <h2>Eliminar usuario</h2>
    <?php if ($mensaje) echo "<p class='success'>$mensaje</p>"; ?>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Nombre de usuario" maxlength="50" required>
        <button type="submit">Eliminar usuario</button>
    </form>

    <div class="inicio">
        <a href="dashboard.php">Inicio</a>
    </div>
</div>
</body>
</html>