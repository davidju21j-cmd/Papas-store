<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes - Papas Store</title>
    <link rel="stylesheet" href="../../public/css/Admin/reportes-admin.css">
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
            <h1>Reportes del Sistema</h1>
        </div>
        
        <!-- Tabla para cada reporte -->
        <div class="tabla-container">

            <div class="filtros">
                <select class="input-select">
                    <option>Seleccionar reporte</option>
                    <option>Ventas por fecha</option>
                    <option>Pedidos por estado</option>
                    <option>Productos más vendidos</option>
                    <option>Ingresos totales</option>
                </select>

                <input type="date" class="input-date">


                <button class="btn-generar">Generar</button>
            </div>

            <div class="reporte-box">
                <p class="placeholder">Aquí aparecerá el reporte generado...</p>
            </div>

        </div>

    </main>

</body>

</html>