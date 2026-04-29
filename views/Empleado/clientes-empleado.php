<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Empleado | Papas Store</title>
    <link rel="stylesheet" href="../../public/css/Empleado/clientes-empleado.css">
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
            <h1>Gestión de Clientes</h1>
            <button class="btn-agregar">Registrar Cliente</button>
        </div>
        <!-- Tabla de clientes -->
        <div class="tabla-container">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre completo</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Compras</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>501</td>
                        <td>Ana Torres</td>
                        <td>ana.torres@gmail.com</td>
                        <td>3124567890</td>
                        <td>8</td>
                        <td><button class="btn-editar">Editar</button></td>
                    </tr>

                    <tr>
                        <td>502</td>
                        <td>Mario Ríos</td>
                        <td>mrios@hotmail.com</td>
                        <td>3009876543</td>
                        <td>3</td>
                        <td><button class="btn-editar">Editar</button></td>
                    </tr>

                    <tr>
                        <td>503</td>
                        <td>Lucía Martínez</td>
                        <td>lucia.mtnez@gmail.com</td>
                        <td>3105566778</td>
                        <td>5</td>
                        <td><button class="btn-editar">Editar</button></td>
                    </tr>
                </tbody>

            </table>

        </div>

    </main>

</body>

</html>