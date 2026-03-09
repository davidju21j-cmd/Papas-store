<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/Cliente/cliente.css">
</head>

<body>

    <header>
        <h1> Paspas Store</h1>
        <p>Tu tienda de ropa exclusiva </p>
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
        <div class="product img-" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Camiseta1.jpg" alt="Camiseta 1">
            <h3>Buso Clemont</h3>
            <p>Tienen una comodidad única y exclusiva</p>
            <p class="price">$160.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html ;'" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Camiseta2.jpg" alt="Camiseta 2">
            <h3>Buso Clemont</h3>
            <p>Tienen una comodidad única y exclusiva</p>
            <p class="price">$160.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fh" onclick="location.href='index.html ;'" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Camiseta3.jpg" alt="Camiseta 3">
            <h3>Buso Clemont</h3>
            <p>Tienen una comodidad única y exclusiva</p>
            <p class="price">$160.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-ff  " onclick="location.href='index.html ;'" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Camiseta4.jpg" alt="Camiseta 4">
            <h3>Buso Undergold</h3>
            <p>Tienen una comodidad suave y única</p>
            <p class="price">$140.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-ff " onclick="location.href='index.html ;'" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Camiseta5.jpg" alt="Camiseta 5">
            <h3>Buso clemont</h3>
            <p>Tienen una comodidad única y exclusiva </p>
            <p class="price">$160.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fg" onclick="location.href='index.html ;'" style="cursor:pointer;">
            <img src="../../public/img/Cliente/Camiseta6.jpg" alt="Camiseta 6">
            <h3>Buso Boss</h3>
            <p>Tienen una comodidad excelente y única </p>
            <p class="price">$90.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>
    </div>
    <footer>
        <p>&copy; Tu tienda de ropa , con la mejor calidad en el mercado.</p>
    </footer>

</body>

</html>