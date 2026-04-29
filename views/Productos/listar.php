<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Productos</title>
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
    <h1>Gestión de Productos</h1>
    <button onclick="abrirModal()" class="btn-agregar">+ Agregar producto</button>
</div>

<!-- TABLA -->
<div class="tabla-box">
<table>
<thead>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Categoría</th>
    <th>Precio</th>
    <th>Marca</th>
    <th>Talla</th>
    <th>Acciones</th>
</tr>
</thead>

<tbody>
<?php if(!empty($datos)): ?>
<?php foreach($datos as $p): ?>
<tr>
    <td><?= $p['Id_producto'] ?></td>
    <td><?= $p['Nombre'] ?></td>
    <td><?= $p['Categorias'] ?></td>
    <td>$<?= $p['Precio'] ?></td>
    <td><?= $p['Marcas'] ?></td>
    <td><?= $p['Tallas'] ?></td>
    <td>

        <button class="btn-editar"
        onclick="editarProducto(
            '<?= $p['Id_producto'] ?>',
            '<?= $p['Nombre'] ?>',
            '<?= $p['Precio'] ?>',
            '<?= $p['Id_marca'] ?>',
            '<?= $p['Id_categoria'] ?>',
            '<?= $p['Id_talla'] ?>',
            '<?= $p['Id_proveedor'] ?>',
            '<?= $p['Id_inventario'] ?>',
            '<?= $p['Id_detalle_producto'] ?>'
        )">Editar</button>

        <a class="btn-eliminar"
        href="/PAPAS-STORE/index.php?controller=Productos&action=eliminar&Id=<?= $p['Id_producto'] ?>"
        onclick="return confirm('¿Eliminar producto?')">Eliminar</a>

    </td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr><td colspan="7">No hay productos</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>

</main>

<!-- MODAL -->
<div id="modal" class="modal">
<div class="modal-contenido">

<h2 id="tituloModal">Agregar Producto</h2>

<form method="POST" id="form"
action="/PAPAS-STORE/index.php?controller=Productos&action=crear">

<input type="hidden" name="Id" id="id">

<input id="nombre" name="Nombre" placeholder="Nombre" required>
<small id="errorNombre" style="color:red;"></small>

<input id="precio" name="Precio" placeholder="Precio" required>
<small id="errorPrecio" style="color:red;"></small>

<select id="marca" name="Id_marca" required>
<option value="">Seleccione marca</option>
<?php foreach($marcas as $m): ?>
<option value="<?= $m['Id_marca'] ?>"><?= $m['Marca'] ?></option>
<?php endforeach; ?>
</select>
<small id="errorMarca" style="color:red;"></small>

<select id="categoria" name="Id_categoria" required>
<option value="">Seleccione categoría</option>
<?php foreach($categorias as $c): ?>
<option value="<?= $c['Id_categoria'] ?>"><?= $c['Categorias'] ?></option>
<?php endforeach; ?>
</select>
<small id="errorCategoria" style="color:red;"></small>

<select id="talla" name="Id_talla" required>
<option value="">Seleccione talla</option>
<?php foreach($tallas as $t): ?>
<option value="<?= $t['Id_talla'] ?>"><?= $t['Talla'] ?></option>
<?php endforeach; ?>
</select>
<small id="errorTalla" style="color:red;"></small>

<input id="proveedor" name="Id_proveedor" placeholder="Proveedor" required>
<small id="errorProveedor" style="color:red;"></small>

<input id="inventario" name="Id_inventario" placeholder="Inventario" required>
<small id="errorInventario" style="color:red;"></small>

<input id="detalle" name="Id_detalle_producto" placeholder="Detalle producto" required>
<small id="errorDetalle" style="color:red;"></small>

<div class="modal-btns">
    <button type="submit" class="btn-guardar">Guardar</button>
    <button type="button" onclick="cerrarModal()" class="btn-cerrar">Cancelar</button>
</div>

</form>

</div>
</div>

<script>

function abrirModal(){
    document.getElementById("modal").style.display = "flex";
    document.getElementById("tituloModal").innerText = "Agregar Producto";
    document.getElementById("form").action =
    "/PAPAS-STORE/index.php?controller=Productos&action=crear";
    document.getElementById("form").reset();
}

function editarProducto(id,nombre,precio,marca,categoria,talla,proveedor,inventario,detalle){

    document.getElementById("modal").style.display = "flex";
    document.getElementById("tituloModal").innerText = "Editar Producto";
    document.getElementById("form").action =
    "/PAPAS-STORE/index.php?controller=Productos&action=editar";

    document.getElementById("id").value = id;
    document.getElementById("nombre").value = nombre;
    document.getElementById("precio").value = precio;

    document.getElementById("marca").value = marca;
    document.getElementById("categoria").value = categoria;
    document.getElementById("talla").value = talla;

    document.getElementById("proveedor").value = proveedor;
    document.getElementById("inventario").value = inventario;
    document.getElementById("detalle").value = detalle;
}

function cerrarModal(){
    document.getElementById("modal").style.display = "none";
}

// VALIDACIONES (las que sí funcionan)
document.getElementById("form").addEventListener("submit", function(e){

    let errores = [];

    let nombre = document.getElementById("nombre").value.trim();
    let precio = document.getElementById("precio").value.trim();
    let marca = document.getElementById("marca").value;
    let categoria = document.getElementById("categoria").value;
    let talla = document.getElementById("talla").value;
    let proveedor = document.getElementById("proveedor").value.trim();
    let inventario = document.getElementById("inventario").value.trim();
    let detalle = document.getElementById("detalle").value.trim();

    document.querySelectorAll("small").forEach(x => x.innerText = "");

    if(nombre === "" || !/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/.test(nombre)){
        document.getElementById("errorNombre").innerText = "Nombre inválido (solo letras)";
        errores.push("nombre");
    }

    if(precio === "" || !/^[0-9]+$/.test(precio)){
        document.getElementById("errorPrecio").innerText = "Precio inválido (solo números)";
        errores.push("precio");
    }

    if(marca === ""){
        document.getElementById("errorMarca").innerText = "Seleccione marca";
        errores.push("marca");
    }

    if(categoria === ""){
        document.getElementById("errorCategoria").innerText = "Seleccione categoría";
        errores.push("categoria");
    }

    if(talla === ""){
        document.getElementById("errorTalla").innerText = "Seleccione talla";
        errores.push("talla");
    }

    if(proveedor === "" || !/^[0-9]+$/.test(proveedor)){
        document.getElementById("errorProveedor").innerText = "Solo números";
        errores.push("proveedor");
    }

    if(inventario === "" || !/^[0-9]+$/.test(inventario)){
        document.getElementById("errorInventario").innerText = "Solo números";
        errores.push("inventario");
    }

    if(detalle === "" || !/^[0-9]+$/.test(detalle)){
        document.getElementById("errorDetalle").innerText = "Solo números";
        errores.push("detalle");
    }

    if(errores.length > 0){
        e.preventDefault();
    }

});

</script>

</body>
</html>