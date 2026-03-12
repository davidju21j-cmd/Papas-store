<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pedidos</title>
    <link rel="stylesheet" href="../../public/css/Admin/pedidos-admin.css">
</head>

<body>
    
    <!-- /Contenido donde esta cada modulo/ -->
    <header class="sidebar">
        <h2 class="logo">Papas Store</h2>
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

        <h1>Gestión de Pedidos</h1>
        <p class="subtitle">Control y seguimiento de los pedidos realizados por los clientes</p>

        <!-- Acciones -->
        <section class="actions">
            <input type="text" placeholder="Buscar pedido...">

            <select>
                <option value="">Todos los estados</option>
                <option>Pendiente</option>
                <option>Enviado</option>
                <option>Completado</option>
                <option>Cancelado</option>
            </select>

            <button class="btn-add">+ Crear Pedido Manual</button>
        </section>

        <!-- Table de pedidos -->
        <section class="table-box">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>

                <tr>
                    <td>5001</td>
                    <td>Juan Pérez</td>
                    <td>2025-03-01</td>
                    <td>$150.000</td>
                    <td><span class="pendiente">Pendiente</span></td>
                    <td>
                        <button class="view">Ver</button>
                        <button class="edit">Actualizar</button>
                    </td>
                </tr>

                <tr>
                    <td>5002</td>
                    <td>Laura Torres</td>
                    <td>2025-03-02</td>
                    <td>$90.000</td>
                    <td><span class="enviado">Enviado</span></td>
                    <td>
                        <button class="view">Ver</button>
                        <button class="edit">Actualizar</button>
                    </td>
                </tr>

                <tr>
                    <td>5003</td>
                    <td>Carlos Ruiz</td>
                    <td>2025-03-03</td>
                    <td>$230.000</td>
                    <td><span class="completado">Completado</span></td>
                    <td>
                        <button class="view">Ver</button>
                        <button class="edit">Actualizar</button>
                    </td>
                </tr>

                <tr>
                    <td>5004</td>
                    <td>Ana Gómez</td>
                    <td>2025-03-03</td>
                    <td>$70.000</td>
                    <td><span class="cancelado">Cancelado</span></td>
                    <td>
                        <button class="view">Ver</button>
                        <button class="edit">Actualizar</button>
                    </td>
                </tr>

            </table>
        </section>

    </main>

</body>

</html>