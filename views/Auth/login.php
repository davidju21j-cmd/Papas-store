<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login - Papas Store</title>
<link rel="stylesheet" href="/Papas-Store/public/css/Login.css">
</head>

<body>

<div class="Container">


    <div class="left-side">
      <img src="/Papas-Store/public/img/Logo.jpeg" alt="Logo tienda">
    </div>


    <div class="right-side">
      <div class="login-container">
        
<h2>Iniciar Sesión</h2>

<form method="POST" action="index.php?controller=auth&action=login">

<input type="email" name="correo" placeholder="Correo" required>
<input type="password" name="password" placeholder="Contraseña" required>

<button type="submit">Ingresar</button>

</form>

<p>¿No tienes cuenta?</p>

<a href="index.php?controller=auth&action=register">
Registrarse
</a>

</div>
</div>

</body>
</html>