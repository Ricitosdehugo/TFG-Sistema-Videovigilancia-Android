<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="fotos/camera.ico">
    <title>Eliminar Cámara</title>
<?php require_once 'estilos/estilos_eliminar_camara.php'; ?>
</head>
<body>
<div class="form-box">
    <h2>Eliminar cámara</h2>
    <?php if ($mensaje) echo "<p class='success'>$mensaje</p>"; ?>
    <form method="post" action="">
        <input type="text" name="nombre" placeholder="Nombre de la cámara" maxlength="50" required>
        <button type="submit">Eliminar cámara</button>
    </form>

    <div class="inicio">
        <a href="dashboard.php">Inicio</a>
    </div>
</div>
</body>
</html>