<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="fotos/camera.ico">
    <title>Añadir Cámara</title>
<?php require_once 'estilos/estilos_agregar_camara.php'; ?>
</head>
<body>
<div class="form-box">
    <h2>Añadir nueva cámara</h2>
    <?php if ($mensaje) echo "<p class='success'>$mensaje</p>"; ?>
    <form method="post" action="">
        <input type="text" name="nombre" placeholder="Nombre (ej. Salón)" maxlength="50" required>
        <input type="url" name="ip" placeholder="IP o URL" maxlength="100" required>
        <input type="text" name="puerto" placeholder="Puerto (ej. 8080)" maxlength="5" required>
        <button type="submit">Guardar cámara</button>
    </form>

    <div>
        <a href="dashboard.php">Inicio</a>
    </div>
</div>
</body>
</html>