<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: /Papas-Store/index.php?controller=auth&action=login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Papas Store - Panel</title>

<link rel="stylesheet" href="/Papas-Store/public/css/admin/Lociones.css">

</head>

<body>

<header>

<h1>Papas Store</h1>
<p>Tu tienda de ropa exclusiva</p>

<div class="header-buttons">

<span>Bienvenido <?php echo $_SESSION['usuario']; ?></span>

<a href="/Papas-Store/index.php?controller=auth&action=logout">
<button class="btn">Cerrar Sesión</button>
</a>

</div>

</header>

<nav>
<a href="#">Lociones</a>
<a href="#">Camisetas</a>
<a href="#">Pantalones</a>
<a href="#">Bermudas</a>
<a href="#">Gorras</a>
<a href="#">Pantalonetas</a>
</nav>

<div class="container">

<div class="product img-fb">
<img src="/Papas-Store/public/img/perfume-moschino-toy-boy-perfumes-663.webp">
<h3>Amaderada Especiada</h3>
<p>Una fragancia temporal que combina notas frescas y amaderadas.</p>
<p class="price">$170.000</p>
<button>Agregar</button>
</div>


<div class="product">
<img src="/Papas-Store/public/img/Versace-Eros-EDP_580x.webp">
<h3>Aromática fougère</h3>
<p>Es una fragancia temporal que nos sirve para citas románticas.</p>
<p class="price">$160.000</p>
<button>Agregar</button>
</div>


<div class="product">
<img src="/Papas-Store/public/img/LATTAFA--BADEE-AL-OUD-BLACK-100ML-cosmeticos-en-linea.webp">
<h3>BADEE-AL-OUD-BLACK</h3>
<p>Profunda mezcla de maderas ahumadas y especias intensas.</p>
<p class="price">$150.000</p>
<button>Agregar</button>
</div>


<div class="product">
<img src="/Papas-Store/public/img/6291108733875.jpg.jpg">
<h3>Bade'e Al Oud Amethyst</h3>
<p>Fragancia floral y dulce con suaves notas de maderas orientales.</p>
<p class="price">$150.000</p>
<button>Agregar</button>
</div>


<div class="product">
<img src="/Papas-Store/public/img/Khamrah_1.webp">
<h3>Khamrah Lattafa</h3>
<p>Dulce mezcla de especias, frutas exóticas y maderas cálidas.</p>
<p class="price">$200.000</p>
<button>Agregar</button>
</div>


<div class="product">
<img src="/Papas-Store/public/img/image_8548c931-6413-4795-997a-0fba03d022da_1200x1200.webp">
<h3>Invictus Victory</h3>
<p>Intensa combinación de especias frescas y maderas ambaradas.</p>
<p class="price">$190.000</p>
<button>Agregar</button>
</div>


<div class="product">
<img src="/Papas-Store/public/img/9_pm_AFNAN_-_Eau_De_Parfum_-_100ml_-_Hombre_858e9405-d2de-43f5-8ef7-19ee8579492c_580x.webp">
<h3>Afnan 9 pm</h3>
<p>Aromática y seductora mezcla dulces y con toque cálido.</p>
<p class="price">$160.000</p>
<button>Agregar</button>
</div>


<div class="product">
<img src="/Papas-Store/public/img/w=1500,h=1500,fit=pad.webp">
<h3>Amber Oud Gold</h3>
<p>Fragancia elegante que combina frutas dulces, ámbar y oud cálido.</p>
<p class="price">$200.000</p>
<button>Agregar</button>
</div>


<div class="product img-fi">
<img src="/Papas-Store/public/img/lattafa-pride-of-lattafa-eau-de-parfum-100ml-hombre_b5c3a725-a818-4d33-8c95-a67507b9a1b9.avif">
<h3>Lattafa Pride Fakhar</h3>
<p>Fragancia floral y frutal realizada con la calidez del ámbar.</p>
<p class="price">$190.000</p>
<button>Agregar</button>
</div>

</div>


<footer>
<p>&copy; Tu tienda de ropa, con la mejor calidad en el mercado.</p>
</footer>

</body>

</html>