<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Recuperar contraseña</title>
<link rel="stylesheet" href="/Papas-Store/public/css/Auth/Style.css">
</head>
<body>

    <div class="Container">

    <div class="left-side">
      <img src="/Papas-Store/public/img/Logo.jpeg">
    </div>

    <div class="right-side">
      <div class="login-container">

      <h2>Recuperar contraseña</h2>

<?php if(isset($msg)): ?>
    <p><?php echo $msg; ?></p>
<?php endif; ?>

<form action="index.php?controller=auth&action=recuperar" method="POST">
    <input type="email" name="correo" placeholder="Correo" required>
    <button type="submit">Enviar enlace</button>
</form>

<a href="index.php?controller=auth&action=login">Volver</a>

</body>
</html>