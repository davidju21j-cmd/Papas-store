<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración del Sistema - Papas Store</title>
    <link rel="stylesheet" href="../../public/css/Admin/configuracion-admin.css">
</head>

<body>

    <!-- /Contenido donde esta cada modulo/ -->
    <header class="sidebar">
        <h2>Papas Store</h2>
        <nav>
            <a href="../../index.php?controller=admin&action=index">Dashboard</a>
            <a href="productos-admin.php">Productos</a>
            <a href="inventario-admin.php">Inventario</a>
            <a href="pedidos-admin.php">Pedidos</a>
            <a href="cliente-admin.php">Clientes</a>
            <a href="proveedores-admin.php">Proveedores</a>
            <a href="usuarios-admin.php">Usuarios</a>
            <a href="reportes-admin.php">Reportes</a>
            <a href="configuracion-admin.php">Configuración</a>
        </nav>
    </header>

    <!-- contenido principal -->
    <main class="content">

        <div class="header">
            <h1>Configuración del Sistema</h1>
        </div>

        <!-- Tarjetas de Configuración del sistema -->
        <div class="settings-container">

            <div class="setting-box">
                <h3>Datos de la tienda</h3>
                <label>Nombre de la tienda</label>
                <input type="text" placeholder="Papas Store">

                <label>Correo de contacto</label>
                <input type="email" placeholder="contacto@example.com">

                <label>Teléfono</label>
                <input type="text" placeholder="300 000 0000">

                <button class="btn-guardar">Guardar cambios</button>
            </div>

            <div class="setting-box">
                <h3>Preferencias del sistema</h3>
                <label>Tema</label>
                <select>
                    <option>Claro</option>
                    <option>Oscuro</option>
                </select>

                <label>Idioma</label>
                <select>
                    <option>Español</option>
                    <option>Inglés</option>
                </select>

                <label>Zona horaria</label>
                <select>
                    <option>GMT-5 (Colombia)</option>
                    <option>GMT-6</option>
                    <option>GMT-4</option>
                </select>

                <button class="btn-guardar">Guardar cambios</button>
            </div>

            <div class="setting-box">
                <h3>Seguridad</h3>
                <label>Contraseña actual</label>
                <input type="password">

                <label>Nueva contraseña</label>
                <input type="password">

                <label>Confirmar nueva contraseña</label>
                <input type="password">

                <button class="btn-guardar">Actualizar contraseña</button>
            </div>

        </div>

    </main>

</body>

</html>