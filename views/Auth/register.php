<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro - Papas Store</title>
<link rel="stylesheet" href="/Papas-Store/public/css/style.css">

<style>
.errores{
    background: #9fd7e7;
    border: 1px solid black;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 6px;
}

.errores ul{
    margin: 0;
    padding-left: 20px;
}

.errores li{
    color: white;
}
</style>

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

      <p class="sub">
        ¿Ya estás registrado?
        <a href="index.php?controller=auth&action=login">Iniciar sesión</a>
      </p>

      <form method="POST" action="index.php?controller=auth&action=register">

        <label>Nombre</label>
        <input type="text" name="nombre" required
               value="<?= $_POST['nombre'] ?? '' ?>"
               pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ ]+"
               title="Solo letras">

        <label>Apellido</label>
        <input type="text" name="apellido"
               value="<?= $_POST['apellido'] ?? '' ?>"
               pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ ]+"
               title="Solo letras">

        <label>Correo</label>
        <input type="email" name="correo" required
               value="<?= $_POST['correo'] ?? '' ?>">

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <label>Telefono</label>
        <input type="text" name="telefono"
               value="<?= $_POST['telefono'] ?? '' ?>"
               pattern="[0-9]+"
               title="Solo números">

        <label>Direccion</label>
        <input type="text" name="direccion"
               value="<?= $_POST['direccion'] ?? '' ?>">

        <label>Documento</label>
        <input type="text" name="documento"
               value="<?= $_POST['documento'] ?? '' ?>"
               pattern="[0-9]+"
               title="Solo números">

        <button type="submit" class="btn">Registrarse</button>

      </form>

  </div>

</div>

</body>
</html>