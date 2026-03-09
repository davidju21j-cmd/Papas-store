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
        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Bermuda 1.jpg" alt="Bermuda 1">
            <h3>Bermuda Dsquared</h3>
            <p>Tiene una comodidad única y exclusiva</p>
            <p class="price">$110.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fc" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Bermuda 2.jpg" alt="Bermuda 2">
            <h3>Bermuda Amiri</h3>
            <p>Tiene una comodidad única y exclusiva</p>
            <p class="price">$110.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fk" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Bermuda 3.jpg" alt="Bermuda 3">
            <h3>Bermuda Clasica</h3>
            <p>Tiene una comodidad única y exclusiva</p>
            <p class="price">$90.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Bermuda 4.jpg" alt="Bermuda 4">
            <h3>Bermuda Dsquared</h3>
            <p>Tiene una comodidad única y exclusiva</p>
            <p class="price">$110.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Bermuda 5.jpg" alt="Bermuda 5">
            <h3>Bermuda Clasica</h3>
            <p>Tiene una comodidad única y exclusiva</p>
            <p class="price">$90.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fn" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Bermuda 6.jpg" alt="Bermuda 6">
            <h3>Bermuda Dsquared</h3>
            <p>Tiene una comodidad única y exclusiva</p>
            <p class="price">$110.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>
    </div>
    <footer>
        <p>&copy; Tu tienda de ropa , con la mejor calidad en el mercado.</p>
    </footer>

</body>

</html>