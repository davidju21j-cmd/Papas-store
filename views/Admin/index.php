<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link rel="stylesheet" href="public/css/Admin/dashboard-admin.css">
</head>

<body>

    <!-- /Contenido donde esta cada modulo/ -->
    <header class="sidebar">
        <h2 class="logo">Papas Store</h2>
        <nav>
            <a href="index.php?controller=admin&action=index">Dashboard</a>
            <a href="views/Admin/productos-admin.php">Productos</a>
            <a href="views/Admin/inventario-admin.php">Inventario</a>
            <a href="views/Admin/pedidos-admin.php">Pedidos</a>
            <a href="views/Admin/cliente-admin.php">Clientes</a>
            <a href="views/Admin/proveedores-admin.php">Proveedores</a>
            <a href="views/Admin/usuarios-admin.php">Usuarios</a>
            <a href="views/Admin/reportes-admin.php">Reportes</a>
            <a href="views/Admin/configuracion-admin.php">Configuración</a>
        </nav>
    </header>

    <!-- contenido principal -->
    <main class="content">

        <h1>Administrador</h1>
        <p class="subtitle">Resumen general del sistema</p>

        <!-- tarjetas de resumen -->
        <section class="cards">
            <div class="card">
                <h3>Ventas del día</h3>
                <p class="number">$5.000</p>
            </div>

            <div class="card">
                <h3>Productos</h3>
                <p class="number">320</p>
            </div>

            <div class="card">
                <h3>Pedidos pendientes</h3>
                <p class="number">12</p>
            </div>

            <div class="card">
                <h3>Clientes registrados</h3>
                <p class="number">540</p>
            </div>
        </section>

        <!-- Grafica y tablas -->
        <section class="panel">
            <div class="panel-box chart">
                <h2>Gráfica de Ventas</h2>
                <div class="fake-chart"></div>
            </div>

            <div class="panel-box table">
                <h2>Productos con Bajo Stock</h2>
                <table>
                    <tr>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                    </tr>
                    <tr>
                        <td>Camisa Negra</td>
                        <td>Camisas</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Pantalón Azul</td>
                        <td>Pantalones</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Pantalonetas</td>
                        <td>Pantaloneta</td>
                        <td>2</td>
                    </tr>
                </table>
            </div>
        </section>

    </main>

</body>

</html>