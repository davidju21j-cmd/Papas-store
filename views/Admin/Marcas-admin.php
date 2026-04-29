<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Marcas</title>
<link rel="stylesheet" href="/PAPAS-STORE/public/css/Admin/usuarios-admin.css">
</head>

<body>

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

        <a href="/PAPAS-STORE/index.php?controller=auth&action=logout" class="logout-btn">
            Cerrar sesión
        </a>
    </nav>
</header>

<main class="contenido">

<div class="titulo-box">
    <h1>Gestión de Marcas</h1>

    <button onclick="abrirModal()" class="btn-agregar">
        + Agregar marca
    </button>
</div>

<!-- TABLA -->
<div class="tabla-box">
<table>
<thead>
<tr>
    <th>ID</th>
    <th>Marca</th>
    <th>Acciones</th>
</tr>
</thead>

<tbody>

<?php if(!empty($datos)): ?>
<?php foreach($datos as $m): ?>

<tr>
    <td><?= $m['Id_marca'] ?? '' ?></td>
    <td><?= $m['Marca'] ?? 'Sin nombre' ?></td>

    <td>

        <button class="btn-editar"
        onclick="editarMarca(
            '<?= $m['Id_marca'] ?? '' ?>',
            '<?= $m['Marca'] ?? '' ?>'
        )">
        Editar
        </button>

        <a class="btn-eliminar"
        href="/PAPAS-STORE/index.php?controller=Marcas&action=eliminar&Id=<?= $m['Id_marca'] ?? '' ?>"
        onclick="return confirm('¿Eliminar marca?')">
        Eliminar
        </a>

    </td>
</tr>

<?php endforeach; ?>
<?php else: ?>
<tr><td colspan="3">No hay marcas</td></tr>
<?php endif; ?>

</tbody>
</table>
</div>

</main>

<!-- MODAL -->
<div id="modal" class="modal">
<div class="modal-contenido">

<h2 id="tituloModal">Agregar Marca</h2>

<form method="POST" id="form"
action="/PAPAS-STORE/index.php?controller=Marcas&action=crear">

<input type="hidden" name="Id" id="id">

<input id="marca" name="Marca" placeholder="Nombre de la marca" required>

<div class="modal-btns">
    <button type="submit" class="btn-guardar">Guardar</button>
    <button type="button" onclick="cerrarModal()" class="btn-cerrar">Cancelar</button>
</div>

</form>

</div>
</div>

<script>

// ABRIR
function abrirModal(){
    document.getElementById("modal").style.display = "flex";
    document.getElementById("tituloModal").innerText = "Agregar Marca";
    document.getElementById("form").action =
    "/PAPAS-STORE/index.php?controller=Marcas&action=crear";

    document.getElementById("form").reset();
}

// EDITAR
function editarMarca(id,marca){

    document.getElementById("modal").style.display = "flex";

    document.getElementById("tituloModal").innerText = "Editar Marca";
    document.getElementById("form").action =
    "/PAPAS-STORE/index.php?controller=Marcas&action=editar";

    document.getElementById("id").value = id;
    document.getElementById("marca").value = marca;
}

// CERRAR
function cerrarModal(){
    document.getElementById("modal").style.display = "none";
}

</script>

</body>
</html>