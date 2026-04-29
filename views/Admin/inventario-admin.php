<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="../../public/css/Admin/inventario-admin.css">
</head>

<body>

    <!-- /Contenido donde esta cada modulo/ -->
    <header class="sidebar">
        <h2 class="logo">Papas Store</h2>
        <nav>
            
        <a href="/PAPAS-STORE/index.php?controller=admin&action=index">Dashboard</a>
        <a href="/PAPAS-STORE/index.php?controller=Productos&action=index">Productos</a>
        <a href="/PAPAS-STORE/views/Admin/Marcas-admin.php">Marcas</a>
        <a href="/PAPAS-STORE/views/Admin/inventario-admin.php">Inventario</a>
        <a href="/PAPAS-STORE/views/Admin/pedidos-admin.php">Pedidos</a>
        <a href="/PAPAS-STORE/views/Admin/cliente-admin.php">Clientes</a>
        <a href="/PAPAS-STORE/views/Admin/proveedores-admin.php">Proveedores</a>
        <a href="/PAPAS-STORE/index.php?controller=admin&action=usuarios">Usuarios</a>
        <a href="/PAPAS-STORE/views/Admin/reportes-admin.php">Reportes</a>
        <a href="/PAPAS-STORE/views/Admin/configuracion-admin.php">Configuración</a>

            <!-- Cerrar sesión -->
            <a href="/PAPAS-STORE/index.php?controller=auth&action=logout" class="logout-btn" onclick="confirmarLogout()">
                Cerrar sesión
            </a>
        </nav>
    </header>

    <!-- contenido principal -->
    <main class="content">

        <h1>Gestión de Inventario</h1>
        <p class="subtitle">Control de existencias, entradas y salidas</p>

        <!-- Barra de acciones -->
        <section class="actions">
            <input type="text" placeholder="Buscar producto...">
            <button class="btn-add">+ Registrar Movimiento</button>
        </section>

        <!-- Table de inventario -->
        <div class="table-box">
            <h2>Inventario Actual</h2>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>

                <tr>
                    <td>101</td>
                    <td>Camisa Negra</td>
                    <td>Camisas</td>
                    <td>4</td>
                    <td><span class="low">Bajo</span></td>
                    <td>
                        <button class="btn-entry">Entrada</button>
                        <button class="btn-exit">Salida</button>
                    </td>
                </tr>

                <tr>
                    <td>102</td>
                    <td>Pantalón Azul</td>
                    <td>Pantalones</td>
                    <td>14</td>
                    <td><span class="normal">Normal</span></td>
                    <td>
                        <button class="btn-entry">Entrada</button>
                        <button class="btn-exit">Salida</button>
                    </td>
                </tr>

                <tr>
                    <td>103</td>
                    <td>Pantaloneta</td>
                    <td>Pantaloneta</td>
                    <td>2</td>
                    <td><span class="critical">Crítico</span></td>
                    <td>
                        <button class="btn-entry">Entrada</button>
                        <button class="btn-exit">Salida</button>
                    </td>
                </tr>
            </table>
        </div>

    </main>

</body>

</html>