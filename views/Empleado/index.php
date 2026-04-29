<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Empleado - Papas Store</title>
    <link rel="stylesheet" href="public/css/Empleado/dashboard-empleado.css">
</head>

<body>
    <!-- /Contenido donde esta cada modulo/ -->
    <header class="sidebar">
        <h2>Papas Store</h2>
        <nav>
            <a href="index.php?controller=empleado&action=index">Dashboard</a>
            <a href="views/Empleado/productos-empleado.php">Productos</a>
            <a href="views/Empleado/inventario-empleado.php">Inventario</a>
            <a href="views/Empleado/clientes-empleado.php">Clientes</a>
            <a href="views/Empleado/Reportes-empleado.php">Reportes</a>

            <!-- Cerrar sesión -->
            <a href="#" class="logout-btn" onclick="confirmarLogout()">
                Cerrar sesión
            </a>
        </nav>
    </header>

    <!-- contenido principal -->
    <main class="content">

        <div class="header">
            <h1>Dashboard del Empleado</h1>
        </div>
        <!-- Tarjetas de resumen -->
        <div class="cards">

            <div class="card">
                <h3>Productos registrados</h3>
                <p class="numero">40</p>
            </div>

            <div class="card">
                <h3>Clientes activos</h3>
                <p class="numero">50</p>
            </div>

            <div class="card">
                <h3>Inventario bajo</h3>
                <p class="numero">7</p>
            </div>

        </div>
        <!-- Tabla de los movimientos -->
        <div class="tabla-container">
            <h2>Últimos movimientos</h2>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Empleado</th>
                        <th>Acción</th>
                        <th>Fecha</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Juan Diego</td>
                        <td>Actualizó stock</td>
                        <td>2025-11-10</td>
                    </tr>

                    <tr>
                        <td>02</td>
                        <td>Sofía Ríos</td>
                        <td>Registró cliente</td>
                        <td>2025-11-08</td>
                    </tr>

                    <tr>
                        <td>03</td>
                        <td>Santiago Sanabria</td>
                        <td>Editó producto</td>
                        <td>2025-11-07</td>
                    </tr>
                </tbody>

            </table>
        </div>

    </main>
     <!-- SCRIPT CONFIRMAR LOGOUT -->
    <script>
        function confirmarLogout(){
            if(confirm("¿Seguro que quieres cerrar sesión?")){
                window.location.href = "index.php?controller=auth&action=logout";
            }
        }
    </script>

</body>

</html>