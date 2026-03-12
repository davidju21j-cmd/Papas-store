<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios - Papas Store</title>
    <link rel="stylesheet" href="../../public/css/Admin/usuarios-admin.css">
</head>

<body>

    <!-- Sidebar -->
    <header class="sidebar">
        <h2>Papas Store</h2>
        <nav>
            <a href="../../index.php?controller=admin&action=index">Dashboard</a>
            <a href="productos-admin.php">Productos</a>
            <a href="inventario-admin.php">Inventario</a>
            <a href="pedidos-admin.php">Pedidos</a>
            <a href="cliente-admin.php">Clientes</a>
            <a href="proveedores-admin.php">Proveedores</a>
            <a  href="usuarios-admin.php">Usuarios</a>
            <a href="reportes-admin.php">Reportes</a>
            <a href="configuracion-admin.php">Configuración</a>
        </nav>
    </header>

    <main class="contenido">

        <div class="titulo-box">
            <h1>Gestión de Usuarios y Roles</h1>
            <button id="btn-abrir" class="btn-agregar">Agregar usuario</button>
        </div>

        <div class="tabla-box">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre completo</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla-usuarios"></tbody>
            </table>
        </div>

    </main>

    <!-- MODAL -->
    <div id="modal" class="modal">
        <div class="modal-contenido">
            <h2 id="modal-titulo">Agregar Usuario</h2>

            <form id="form-usuario">

                <input type="hidden" id="usuario-id">

                <label>Nombre completo:</label>
                <input id="nombre" type="text" required>

                <label>Usuario:</label>
                <input id="usuario" type="text" required>

                <label>Rol:</label>
                <select id="rol" required>
                    <option value="">Seleccione...</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Empleado">Empleado</option>
                    <option value="Cliente">Cliente</option>
                </select>

                <label>Estado:</label>
                <select id="estado" required>
                    <option value="">Seleccione...</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>

                <div class="modal-btns">
                    <button type="button" id="cerrar-modal" class="btn-cerrar">Cancelar</button>
                    <button type="submit" class="btn-guardar">Guardar</button>
                </div>
            </form>
        </div>
</div>
   <script src="../../public/js/admin/usuarios-admin.js"></script>
</body>
</html>
