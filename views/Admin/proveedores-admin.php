<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Proveedores - Papas Store</title>
    <link rel="stylesheet" href="../../public/css/Admin/proveedores-admin.css">
</head>

<body>

    <!-- /Contenido donde esta cada modulo/ -->
    <header class="sidebar">
        <h2>Papas Store</h2>
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
        <div class="header">
            <h1>Gestión de Proveedores</h1>
            <button class="btn-agregar">Agregar proveedor</button>
        </div>
        
        <!-- Table de los proveedores -->
        <div class="tabla-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre proveedor</th>
                        <th>Contacto</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Distribuidora RopaMax</td>
                        <td>Juan Herrera</td>
                        <td>3105558899</td>
                        <td>ventas@ropamax.com</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                            <button class="btn-eliminar">Eliminar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>ModaExpress S.A</td>
                        <td>Sara Castro</td>
                        <td>3024451133</td>
                        <td>contacto@modaexpress.com</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                            <button class="btn-eliminar">Eliminar</button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </main>

</body>

</html>