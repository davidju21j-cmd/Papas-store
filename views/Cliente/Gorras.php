<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papas Store - Tu tienda de ropa</title>
    <link rel="stylesheet" href="public/css/Cliente/cliente.css">

</head>

<body>

    <header>
        <h1>Papas Store</h1>
        <p>Tu tienda de ropa exclusiva</p>
        <div class="header-buttons">
            <a href="Login.html">
                <button class="btn">Inicia Sesión</button>
            </a>
        </div>
    </header>

    <nav>
        <a href="../../index.php?controller=cliente&action=index">Lociones</a>
       <a href="views/Cliente/Camisetas.php">Camisetas</a>
        <a href="views/Cliente/Pantalones.php">Pantalones</a>
        <a href="views/Cliente/Bermudas.php">Bermudas</a>
        <a href="views/Cliente/Gorras.php">Gorras</a>
        <a href="views/Cliente/Pantalonetas.php">Pantalonetas</a>
    </nav>

    <div class="container">
        <div class="product img-fz" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="/img/Gorra 1.jpeg" alt="Perfume 1">
            <h3>Gorra Clemont</h3>
            <p>Tiene una orma única y cómoda</p>
            <p class="price">$70.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="/img/Gorra 2.jpeg" alt="Perfume 3">
            <h3>Gorra Boss</h3>
            <p>Tiene una orma única y cómoda.</p>
            <p class="price">$60.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="/img/Gorra 3.jpeg" alt="Perfume 3">
            <h3>Gorra Hugo Boss</h3>
            <p>Tiene una orma única y cómoda.</p>
            <p class="price">$70.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fi" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="/img/Gorra 4.jpeg" alt="Perfume 3">
            <h3>Orient Express</h3>
            <p>Una mezcla exótica de especias y maderas orientales.</p>
            <p class="price">$150.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fc" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="/img/Gorra 5.jpeg" alt="Perfume 3">
            <h3>Orient Express</h3>
            <p>Una mezcla exótica de especias y maderas orientales.</p>
            <p class="price">$150.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>
    </div>
    <footer>
        <p>&copy; Tu tienda de ropa , con la mejor calidad en el mercado.</p>
    </footer>

</body>

</html>