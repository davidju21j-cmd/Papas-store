<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>

<h2>Crear Producto</h2>

<form method="post">

    <label>Nombre:</label><br>
    <input type="text" name="Nombre" required><br><br>

    <label>Precio:</label><br>
    <input type="number" name="Precio" required><br><br>

    <label>Marca:</label><br>
    <select name="Id_marca" required>
        <option value="">Seleccione Marca</option>
        <?php foreach($marcas as $m): ?>
            <option value="<?=$m['Id_marca']?>"><?=$m['Nombre']?></option>
        <?php endforeach ?>
    </select><br><br>

    <label>Categoría:</label><br>
    <select name="Id_categoria" required>
        <option value="">Seleccione Categoría</option>
        <?php foreach($categorias as $c): ?>
            <option value="<?=$c['Id_categoria']?>"><?=$c['Nombre']?></option>
        <?php endforeach ?>
    </select><br><br>

    <label>Talla:</label><br>
    <select name="Id_talla" required>
        <option value="">Seleccione Talla</option>
        <?php foreach($tallas as $t): ?>
            <option value="<?=$t['Id_talla']?>"><?=$t['Nombre']?></option>
        <?php endforeach ?>
    </select><br><br>

    <input type="submit" value="Guardar Producto">

</form>

<br>
<a href="index.php?controller=Productos&action=index">Volver</a>

</body>
</html>