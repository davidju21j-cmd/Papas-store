<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Papas Store</title>
    <link rel="stylesheet" href="/Papas-Store/public/css/style.css">
</head>
<body>
<div class="register-box">
  
  <?php if(!empty($errores)): ?>
     <div class="errores">
     <ul>
        <?php foreach($errores as $e): ?>
         <li><?= $e ?></li>
         <?php endforeach ?>   
     </ul>
     </div>
   <?php endif ?>
    <div class="left">
      <img src="/Papas-Store/public/img/Logo.jpeg" alt="Logo tienda">
    </div>


    <div class="right">

      <h2>Crea tu cuenta</h2>
      <p class="sub">¿Ya estás registrado?
        <a href="index.php?controller=auth&action=login">Iniciar sesión</a>
      </p>

      

      <form  method="post"> 

        <label>Nombre</label>
        <input type="text" name='nombre' placeholder="Nombre" required>

        <label>Apellido</label>
        <input type="text" name='apellido' placeholder="Apellido" required>

        <label>Correo</label>
        <input type="email" name='correo' placeholder="Correo electrónico" required>

        <label>Contraseña</label>
        <input type="password" name='password' placeholder="Contraseña" required>

        <label>Telefono</label>
        <input type="text" name='telefono' placeholder="Número de teléfono" required>

        <label>Direccion</label>
        <input type="text" name='direccion' placeholder="Dirección " required>

        <label>Documento</label>
        <input type="text" name='documento' placeholder="Número de cédula" required>

        <button type="submit" class="btn">Registrarse</button>

      </form>

    </div>
  </div>

       

    </div>
</div>

</body>
</html>