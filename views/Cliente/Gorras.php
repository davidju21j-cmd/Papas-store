<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papas Store - Tu tienda de ropa</title>
    <link rel="stylesheet" href="../../public/css/Cliente/cliente.css">

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
        <a href="Camisetas.php">Camisetas</a>
        <a href="Pantalones.php">Pantalones</a>
        <a href="Bermudas.php">Bermudas</a>
        <a href="Gorras.php">Gorras</a>
        <a href="Pantalonetas.php">Pantalonetas</a>
    </nav>

    <div class="container">
        <div class="product img-fz" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Gorra 1.jpg" alt="Gorra 1">
            <h3>Gorra Clemont</h3>
            <p>Tiene una orma única y cómoda</p>
            <p class="price">$70.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Gorra 2.jpg" alt="Gorra 2">
            <h3>Gorra Boss</h3>
            <p>Tiene una orma única y cómoda.</p>
            <p class="price">$60.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Gorra 3.jpg" alt="Gorra 3">
            <h3>Gorra Hugo Boss</h3>
            <p>Tiene una orma única y cómoda.</p>
            <p class="price">$70.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fi" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Gorra 4.jpg" alt="Gorra 4">
            <h3>Orient Express</h3>
            <p>Una mezcla exótica de especias y maderas orientales.</p>
            <p class="price">$150.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fc" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Gorra 5.jpg" alt="Gorra 5">
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