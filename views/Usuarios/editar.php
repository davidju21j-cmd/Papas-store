<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Formulario para editar un Usuarios -->
    <form action="" method="post">
         <!-- Campo oculto o visible con el ID del usuario-->
        <!-- Se llena automáticamente con los datos obtenidos de la BD -->
        <input type="text" name="Id" placeholder="" value="<?=$datos['Id_usuarios']?>"><br>
          <!-- Campo Nombre con valor precargado -->
        <input type="text" name="Nombre" placeholder="Nombre" value="<?=$datos['Nombre']?>"><br>
        <!-- Campo Apellido con valor precargado -->
        <input type="text" name="Apellido" placeholder="Apellido"  value="<?=$datos['Apellido']?>"><br>
          <!-- Campo Documento -->
        <input type="text" name="Documento" placeholder="Documento"  value="<?=$datos['Documento']?>"><br>
         <!-- Campo Teléfono -->
        <input type="text" name="Telefono" placeholder="Telefono"  value="<?=$datos['Telefono']?>"><br>
         <!-- Campo Correo -->
        <input type="text" name="Correo" placeholder="Correo"  value="<?=$datos['Correo']?>"><br>
        <!-- Campo Dirección -->
        <input type="text" name="Direccion" placeholder="Direccion" value="<?=$datos['Direccion']?>"><br>
        <!-- Botón para enviar los cambios -->
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>