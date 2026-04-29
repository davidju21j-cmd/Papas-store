<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario - Empleado | Papas Store</title>
    <link rel="stylesheet" href="../../public/css/Empleado/inventario-empleado.css">
</head>

<body>
    <!-- /Contenido donde esta cada modulo/ -->
    <header class="sidebar">
        <h2>Papas Store</h2>
        <nav>
            <a href="../../index.php?controller=empleado&action=index">Dashboard</a>
            <a href="productos-empleado.php">Productos</a>
            <a href="inventario-empleado.php">Inventario</a>
            <a href="clientes-empleado.php">Clientes</a>
            <a href="Reportes-empleado.php">Reportes</a>
        </nav>
    </header>
    <!-- contenido principal -->
    <main class="content">

        <div class="header">
            <h1>Inventario</h1>
            <button class="btn-agregar">Añadir Entrada</button>
        </div>
        <!-- Tabla de inventario de la tienda -->
        <div class="tabla-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Stock Actual</th>
                        <th>Stock Mínimo</th>
                        <th>Estado</th>
                        <th>Movimiento</th>
                    </tr>
                </thead>
                <!-- Informacion sobre cada producto -->
                <tbody>
                    <tr>
                        <td>301</td>
                        <td>Camiseta Clemont</td>
                        <td>12</td>
                        <td>5</td>
                        <td><span class="estado ok">Normal</span></td>
                        <td><button class="btn-editar">Actualizar</button></td>
                    </tr>

                    <tr>
                        <td>302</td>
                        <td>Gorra Clemont</td>
                        <td>4</td>
                        <td>6</td>
                        <td><span class="estado bajo">Bajo</span></td>
                        <td><button class="btn-editar">Actualizar</button></td>
                    </tr>

                    <tr>
                        <td>303</td>
                        <td>Locion khamrah lattafa</td>
                        <td>25</td>
                        <td>7</td>
                        <td><span class="estado ok">Normal</span></td>
                        <td><button class="btn-editar">Actualizar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

</body>

</html>