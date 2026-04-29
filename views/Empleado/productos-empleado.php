<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Empleado | Papas Store</title>
    <link rel="stylesheet" href="../../public/css/Empleado/productos-empleado.css">
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
            <h1>Gestión de Productos</h1>
            <button class="btn-agregar">Agregar Producto</button>
        </div>

        <!-- Table de cada uno de los productos -->
        <div class="tabla-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>101</td>
                        <td>Camiseta Clemont</td>
                        <td>Ropa</td>
                        <td>$160.000</td>
                        <td>12</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>102</td>
                        <td>Pantaloneta Jordan</td>
                        <td>Ropa</td>
                        <td>$70.000</td>
                        <td>9</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>103</td>
                        <td>Pantalon Monastery</td>
                        <td>Ropa</td>
                        <td>$160.000</td>
                        <td>4</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

</body>

</html>