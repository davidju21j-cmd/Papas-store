<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>

<h2>Editar Producto</h2>

<form method="post">

    <input type="hidden" name="Id" value="<?=$datos['Id_producto']?>">

    <label>Nombre:</label><br>
    <input type="text" name="Nombre" value="<?=$datos['Nombre']?>" required><br><br>

    <label>Precio:</label><br>
    <input type="number" name="Precio" value="<?=$datos['Precio']?>" required><br><br>

    <label>Marca:</label><br>
    <select name="Id_marca" required>
        <?php foreach($marcas as $m): ?>
            <option value="<?=$m['Id_marca']?>" <?=$datos['Id_marca']==$m['Id_marca']?'selected':''?>>
                <?=$m['Nombre']?>
            </option>
        <?php endforeach ?>
    </select><br><br>

    <label>Categoría:</label><br>
    <select name="Id_categoria" required>
        <?php foreach($categorias as $c): ?>
            <option value="<?=$c['Id_categoria']?>" <?=$datos['Id_categoria']==$c['Id_categoria']?'selected':''?>>
                <?=$c['Nombre']?>
            </option>
        <?php endforeach ?>
    </select><br><br>

    <label>Talla:</label><br>
    <select name="Id_talla" required>
        <?php foreach($tallas as $t): ?>
            <option value="<?=$t['Id_talla']?>" <?=$datos['Id_talla']==$t['Id_talla']?'selected':''?>>
                <?=$t['Nombre']?>
            </option>
        <?php endforeach ?>
    </select><br><br>

    <input type="submit" value="Actualizar Producto">

</form>

<br>
<a href="index.php?controller=Productos&action=index">Volver</a>

</body>
</html>