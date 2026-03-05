<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Enlace para crear un nuevo Usuario -->
    <a href="index.php?controller=Usuario&action=crear">Crear</a>
    <!-- Enlace para cerrar sesión -->
    <a href="index.php?controller=login&action=logout">Cerrar</a>
    <!-- Muestra el usuario y rol almacenados en sesión -->
    <?=$_SESSION['user']?>
    <?=$_SESSION['rol']?>

     <!-- Tabla para mostrar los pacientes -->
    <table>
        <thead>
            <th>Nombre </th>
            <th>Apellido </th>
            <th>Documento </th>
            <th>Telefono </th>
             <th>Correo </th>
            <th>Direccion </th>
</thead>
<tbody>
    <!-- Recorre el arreglo $datos enviado desde el controlador -->
    <?php foreach($datos as $u): ?>
    <tr>
        <!-- Muestra los datos de cada paciente -->
        <td> <?= $u['Nombre']?> </td>
        <td> <?= $u['Apellido']?> </td>
        <td> <?= $u['Documento']?> </td>
        <td> <?= $u['Telefono']?> </td>
        <td> <?= $u['Correo']?> </td>
        <td> <?= $u['Direccion']?> </td>
        <td>
            <!-- Enlaces para editar o eliminar -->
            <a href="index.php?controller=Usuario&action=editar&ID=<?=$u['Id_Usuario']?>">Editar</a>
             <a href="index.php?controller=Usuario&action=eliminar&ID=<?=$u['Id_Usuario']?>">Eliminar</a>
    </td>
    </tr>
    <?php endforeach ?>
    </tbody>
    </table>

</body> 
</html>