<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reportes - Papas Store</title>
    <link rel="stylesheet" href="/PAPAS-STORE/public/css/Admin/reportes-admin.css">

<style>
body{margin:0;font-family:Arial;display:flex;}
.sidebar{width:220px;background:#1e1e2f;color:white;height:100vh;padding:20px;}
.sidebar a{display:block;color:white;padding:10px;margin:5px 0;text-decoration:none;}
.sidebar a:hover{background:#333;}
.content{flex:1;padding:20px;background:#f4f4f4;}

.header{display:flex;justify-content:space-between;align-items:center;}

.btn-logout{background:red;color:white;padding:8px;border:none;text-decoration:none;}

.tabla-container{background:white;padding:20px;border-radius:10px;}

.filtros{display:flex;gap:10px;margin-bottom:20px;}

.input-select,.input-date{
    padding:8px;
}

.btn-generar{
    background:#28a745;
    color:white;
    border:none;
    padding:8px 15px;
}

.reporte-box{
    padding:20px;
    background:#eee;
    border-radius:10px;
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

<div class="header">
    <h1>Reportes del Sistema</h1>

    <a href="/PAPAS-STORE/index.php?controller=auth&action=logout" class="btn-logout">
        Cerrar sesión
    </a>
</div>

<div class="tabla-container">

<div class="filtros">
    <select id="tipoReporte" class="input-select">
        <option value="">Seleccionar reporte</option>
        <option value="ventas">Ventas por fecha</option>
        <option value="pedidos">Pedidos por estado</option>
        <option value="productos">Productos más vendidos</option>
        <option value="ingresos">Ingresos totales</option>
    </select>

    <input type="date" id="fecha" class="input-date">

    <button class="btn-generar" onclick="generarReporte()">Generar</button>
</div>

<div class="reporte-box" id="resultado">
    <p>Aquí aparecerá el reporte generado...</p>
</div>

</div>

</main>

<script>
function generarReporte(){

    let tipo = document.getElementById("tipoReporte").value;
    let fecha = document.getElementById("fecha").value;

    let resultado = document.getElementById("resultado");

    if(tipo === ""){
        resultado.innerHTML = "<p style='color:red;'>Seleccione un reporte</p>";
        return;
    }

    resultado.innerHTML = `
        <h3>Reporte generado</h3>
        <p><strong>Tipo:</strong> ${tipo}</p>
        <p><strong>Fecha:</strong> ${fecha || "No seleccionada"}</p>
    `;
}
</script>

</body>
</html>