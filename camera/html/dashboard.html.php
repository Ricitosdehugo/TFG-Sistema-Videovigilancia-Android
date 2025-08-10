<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="fotos/camera.ico">
    <title>Panel de Cámaras</title>
    <?php require_once 'estilos/estilos_dashboard.php'; ?>
</head>
<body>
    <div class="bienvenida-container">
        <h2>Bienvenido al sistema, <?= htmlspecialchars($_SESSION['username']) ?></h2>
    </div>

    <div class="main-wrapper">
        <div class="left-panel">
            <div class="panel-container">
                <h2>Sistema de vigilancia: Cámaras disponibles</h2>
                <div class="botones">
                    <?php if (empty($camaras)): ?>
                        <p><strong>No hay cámaras registradas.</strong></p>
                    <?php else: ?>
                        <?php foreach ($camaras as $cam): ?>
                            <form action="<?= htmlspecialchars($cam['ip']) . ':' . htmlspecialchars($cam['puerto']) ?>" target="_blank">
                                <button type="submit" class="verde"><?= htmlspecialchars($cam['nombre']) ?></button>
                            </form>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="acciones-container">
                <h2>Gestión de usuarios y cámaras del sistema</h2>
                <div class="botones">
                    <div class="acciones-superior">
                        <form action="agregar_usuario.php">
                            <button type="submit" class="azul">Añadir usuario</button>
                        </form>
                        <form action="agregar_camara.php">
                            <button type="submit" class="azul">Añadir cámara</button>
                        </form>
                    </div>
                    <div class="acciones-inferior">
                        <form action="eliminar_usuario.php">
                            <button type="submit" class="rojo">Eliminar usuario</button>
                        </form>
                        <form action="eliminar_camara.php">
                            <button type="submit" class="rojo">Eliminar cámara</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-panel">
            <div class="cerrar-container">
                <h2>Opciones del sistema</h2>
                <div class="botones">
                    <a href="http://localhost:8089/phpmyadmin/">Base de datos</a>
                    <a href="config/logout.php">Cerrar sesión</a>
                </div>
            </div>
            
            <div class="cerrar-container">
                <h2>Enlaces de interés</h2>
                <div class="botones">
                    <a href="fotos/Tutorial IP & MAC.pdf" download="Tutorial_IP_MAC.pdf">Tutorial de Unión de IP & MAC</a>
                    <a href="https://designer.microsoft.com/">Microsoft Designer para imágenes</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>