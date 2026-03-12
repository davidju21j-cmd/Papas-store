<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clientes</title>
    <link rel="stylesheet" href="../../public/css/Admin/clientes.css">
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

        <h1 class="titulo">Gestión de Clientes</h1>
        <p>Administra los clientes registrados en el sistema.</p>

        <!-- Barra de acciones -->
        <div class="acciones">
            <button class="btn agregar"> Agregar Cliente</button>
            <input type="text" placeholder="Buscar cliente..." class="buscador">
        </div>

        <!-- Tabla de clientes -->
        <div class="tabla-container">
            <table class="tabla">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Compras</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Juan Gómez</td>
                        <td>juan@example.com</td>
                        <td>3001234567</td>
                        <td>15</td>
                        <td>
                            <button class="btn editar">Editar</button>
                            <button class="btn eliminar">Eliminar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>002</td>
                        <td>María Torres</td>
                        <td>maria@example.com</td>
                        <td>3029876543</td>
                        <td>8</td>
                        <td>
                            <button class="btn editar">Editar</button>
                            <button class="btn eliminar">Eliminar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>003</td>
                        <td>Daniel Mejía</td>
                        <td>daniel@example.com</td>
                        <td>3117778899</td>
                        <td>3</td>
                        <td>
                            <button class="btn editar">Editar</button>
                            <button class="btn eliminar">Eliminar</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </main>

</body>

</html>