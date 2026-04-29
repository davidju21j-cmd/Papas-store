<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nueva contraseña</title>
<link rel="stylesheet" href="/Papas-Store/public/css/Auth/Style.css">
</head>
<body>

<h2>Nueva contraseña</h2>

<div class="Container">

    <div class="left-side">
      <img src="/Papas-Store/public/img/Logo.jpeg">
    </div>

    <div class="right-side">
      <div class="login-container">

        <form action="index.php?controller=auth&action=guardarNuevaPassword" method="POST">

            <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">

            <input type="password" name="password" placeholder="Nueva contraseña" required>

            <button type="submit">Guardar</button>

        </form>

    </div>
</div>

</body>
</html>