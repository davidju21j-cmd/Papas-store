<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="../../public/css/Admin/productos-admin.css">
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

        <h1>Gestión de Productos</h1>
        <p class="subtitle">Control de todos los productos de la tienda</p>

        <!-- Barra de acciones -->
        <section class="actions">
            <input type="text" placeholder="Buscar producto...">
            <select>
                <option value="">Todas las categorías</option>
                <option>Lociones</option>
                <option>Camisetas</option>
                <option>Pantalones</option>
                <option>Bermudas</option>
                <option>Gorras</option>
                <option>Pantalonetas</option>
            </select>
            <button class="btn-add">+ Agregar Producto</button>
        </section>

        <!-- Tabla de los productos -->
        <section class="table-box">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>

                <tr>
                    <td>101</td>
                    <td>Camiseta Negra</td>
                    <td>Camiseta</td>
                    <td>$45.000</td>
                    <td>20</td>
                    <td class="actions-row">
                        <button class="edit">Editar</button>
                        <button class="delete">Eliminar</button>
                    </td>
                </tr>

                <tr>
                    <td>102</td>
                    <td>Pantalón Azul</td>
                    <td>Pantalones</td>
                    <td>$60.000</td>
                    <td>14</td>
                    <td class="actions-row">
                        <button class="edit">Editar</button>
                        <button class="delete">Eliminar</button>
                    </td>
                </tr>

                <tr>
                    <td>103</td>
                    <td>Pantaloneta</td>
                    <td>Pantaloneta</td>
                    <td>$70.000</td>
                    <td>34</td>
                    <td class="actions-row">
                        <button class="edit">Editar</button>
                        <button class="delete">Eliminar</button>
                    </td>
                </tr>
            </table>
        </section>

    </main>

</body>

</html>