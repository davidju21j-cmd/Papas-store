<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Configuración</title>

<link rel="stylesheet" href="/PAPAS-STORE/public/css/Admin/configuracion-admin.css">

<style>
body{margin:0;font-family:Arial;display:flex;}
.sidebar{width:220px;background:#1e1e2f;color:white;height:100vh;padding:20px;}
.sidebar a{display:block;color:white;padding:10px;margin:5px 0;text-decoration:none;}
.sidebar a:hover{background:#333;}
.content{flex:1;padding:20px;background:#f4f4f4;}

.settings-container{
    display:flex;
    gap:20px;
}

.setting-box{
    background:white;
    padding:20px;
    border-radius:10px;
    width:30%;
}

.setting-box input, .setting-box select{
    width:100%;
    margin:5px 0;
    padding:8px;
}

.btn-guardar{
    background:#28a745;
    color:white;
    padding:8px;
    border:none;
}

.btn-logout{
    background:red;
    color:white;
    padding:8px;
    text-decoration:none;
}
</style>

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

    <!-- Cerrar sesión -->
            <a href="/PAPAS-STORE/index.php?controller=auth&action=logout" class="logout-btn" onclick="confirmarLogout()">
                Cerrar sesión
            </a>
</nav>
</header>

<main class="content">

<div style="display:flex;justify-content:space-between;">
    <h1>Configuración del Sistema</h1>

    <a href="/PAPAS-STORE/index.php?controller=auth&action=logout" class="btn-logout">
        Cerrar sesión
    </a>
</div>

<div class="settings-container">

<div class="setting-box">
<h3>Datos de la tienda</h3>

<input id="nombre" placeholder="Nombre tienda">
<input id="correo" placeholder="Correo">
<input id="telefono" placeholder="Teléfono">

<button class="btn-guardar" onclick="guardar()">Guardar</button>
</div>

<div class="setting-box">
<h3>Preferencias</h3>

<select id="tema">
<option>Claro</option>
<option>Oscuro</option>
</select>

<select id="idioma">
<option>Español</option>
<option>Inglés</option>
</select>

<button class="btn-guardar" onclick="guardar()">Guardar</button>
</div>

<div class="setting-box">
<h3>Seguridad</h3>

<input type="password" id="actual" placeholder="Actual">
<input type="password" id="nueva" placeholder="Nueva">

<button class="btn-guardar" onclick="guardar()">Actualizar</button>
</div>

</div>

</main>

<script>
function guardar(){
    alert("Cambios guardados correctamente 🔥");
}
</script>

</body>
</html>