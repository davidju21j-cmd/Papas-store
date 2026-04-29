<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Usuarios</title>
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
    <h1>Gestión de Usuarios</h1>

    <button onclick="abrirModalAgregar()" class="btn-agregar">
      + Agregar usuario
    </button>
</div>

<div class="tabla-box">
<table>
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Correo</th>
<th>Teléfono</th>
<th>Rol</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>
<?php foreach($datos as $u): ?>
<tr>

<td><?= $u['Id_usuarios'] ?></td>
<td><?= $u['Nombre']." ".$u['Apellido'] ?></td>
<td><?= $u['Correo'] ?></td>
<td><?= $u['Telefono'] ?></td>
<td><?= $u['Rol'] ?></td>

<td>

<button class="btn-editar"
onclick="editarUsuario(
'<?= $u['Id_usuarios'] ?>',
'<?= $u['Nombre'] ?>',
'<?= $u['Apellido'] ?>',
'<?= $u['Documento'] ?>',
'<?= $u['Telefono'] ?>',
'<?= $u['Correo'] ?>',
'<?= $u['Direccion'] ?>',
'<?= $u['Rol'] ?>'
)">
Editar
</button>

<a class="btn-eliminar"
href="/PAPAS-STORE/index.php?controller=usuarios&action=eliminar&Id=<?= $u['Id_usuarios'] ?>">
Eliminar
</a>

</td>

</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

</main>

<!-- MODAL -->
<div id="modal" class="modal">
<div class="modal-contenido">

<h2 id="tituloModal">Agregar Usuario</h2>

<form method="POST" action="/PAPAS-STORE/index.php?controller=usuarios&action=crear" id="formUsuario">

<input type="hidden" name="id" id="id">

<input id="nombre" name="nombre" placeholder="Nombre" required>
<small id="errorNombre"></small>

<input id="apellido" name="apellido" placeholder="Apellido" required>
<small id="errorApellido"></small>

<input id="documento" name="documento" placeholder="Documento" required>
<small id="errorDocumento"></small>

<input id="telefono" name="telefono" placeholder="Teléfono" required>
<small id="errorTelefono"></small>

<input id="correo" name="correo" placeholder="Correo" required>
<small id="errorCorreo"></small>

<input id="direccion" name="direccion" placeholder="Dirección">
<small id="errorDireccion"></small>

<select id="rol" name="rol">
<option value="">Seleccione rol</option>
<option value="admin">Administrador</option>
<option value="empleado">Empleado</option>
<option value="cliente">Cliente</option>
</select>
<small id="errorRol"></small>

<input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
<small id="errorContrasena"></small>

<div class="modal-btns">
<button type="submit" class="btn-guardar">Guardar</button>
<button type="button" onclick="cerrarModal()" class="btn-cerrar">Cancelar</button>
</div>

</form>

</div>
</div>

<script>

function abrirModalAgregar(){
    document.getElementById("modal").style.display = "block";
    document.getElementById("tituloModal").innerText = "Agregar Usuario";
    document.getElementById("formUsuario").action = "/PAPAS-STORE/index.php?controller=usuarios&action=crear";
    document.getElementById("formUsuario").reset();
}

function editarUsuario(id, nombre, apellido, documento, telefono, correo, direccion, rol){

    document.getElementById("modal").style.display = "block";

    document.getElementById("tituloModal").innerText = "Editar Usuario";
    document.getElementById("formUsuario").action = "/PAPAS-STORE/index.php?controller=usuarios&action=editar";

    document.getElementById("id").value = id;
    document.getElementById("nombre").value = nombre;
    document.getElementById("apellido").value = apellido;
    document.getElementById("documento").value = documento;
    document.getElementById("telefono").value = telefono;
    document.getElementById("correo").value = correo;
    document.getElementById("direccion").value = direccion;
    document.getElementById("rol").value = rol;
}

function cerrarModal(){
    document.getElementById("modal").style.display = "none";
}

/* VALIDACIONES IGUAL QUE PRODUCTOS */
document.getElementById("formUsuario").addEventListener("submit", function(e){

    let errores = [];

    let nombre = document.getElementById("nombre").value.trim();
    let apellido = document.getElementById("apellido").value.trim();
    let documento = document.getElementById("documento").value.trim();
    let telefono = document.getElementById("telefono").value.trim();
    let correo = document.getElementById("correo").value.trim();
    let direccion = document.getElementById("direccion").value.trim();
    let rol = document.getElementById("rol").value;
    let contrasena = document.getElementById("contrasena").value.trim();

    document.querySelectorAll("small").forEach(x => x.innerText = "");

    if(nombre === "" || !/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/.test(nombre)){
        errorNombre.innerText = "Solo letras";
        errores.push("nombre");
    }

    if(apellido === "" || !/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/.test(apellido)){
        errorApellido.innerText = "Solo letras";
        errores.push("apellido");
    }

    if(documento === "" || !/^[0-9]+$/.test(documento)){
        errorDocumento.innerText = "Solo números";
        errores.push("documento");
    }

    if(telefono === "" || !/^[0-9]+$/.test(telefono)){
        errorTelefono.innerText = "Solo números";
        errores.push("telefono");
    }

    if(correo === "" || !/^\S+@\S+\.\S+$/.test(correo)){
        errorCorreo.innerText = "Correo inválido";
        errores.push("correo");
    }

    if(direccion === "" || direccion.length < 5){
        errorDireccion.innerText = "Mínimo 5 caracteres";
        errores.push("direccion");
    }

    if(rol === ""){
        errorRol.innerText = "Seleccione rol";
        errores.push("rol");
    }

    if(contrasena !== "" && contrasena.length < 6){
        errorContrasena.innerText = "Mínimo 6 caracteres";
        errores.push("contrasena");
    }

    if(errores.length > 0){
        e.preventDefault();
    }

});

</script>

</body>
</html>