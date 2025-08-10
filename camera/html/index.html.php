<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="fotos/camera.ico">
    <title>Login - Cámaras de Seguridad</title>
    <?php require_once 'estilos/estilos_index.php'; ?>
</head>
<body>
<div class="login-container">
    <h2>Iniciar sesión</h2>
    <?php if ($error) echo "<p class='error'>$error</p>"; ?>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Usuario" maxlength="50" required><br>
        <input type="password" name="password" placeholder="Contraseña" maxlength="50" required><br>
        <button type="submit">Entrar</button>
    </form>
</div>
</body>
</html>