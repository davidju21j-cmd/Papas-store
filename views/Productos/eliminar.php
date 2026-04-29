<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Producto</title>
</head>
<body>

<h2>Eliminar Producto</h2>

<p>¿Estás seguro que deseas eliminar este producto?</p>

<ul>
    <li><strong>Nombre:</strong> <?=$datos['Nombre']?></li>
    <li><strong>Precio:</strong> <?=$datos['Precio']?></li>
</ul>

<form method="post">
    <input type="hidden" name="Id" value="<?=$datos['Id_producto']?>">
    
    <button type="submit">Sí, eliminar</button>
    <a href="index.php?controller=Productos&action=index">Cancelar</a>
</form>

</body>
</html>