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
        <a href="index.php?controller=cliente&action=index">Lociones</a>   
        <a href="views/Cliente/Camisetas.php">Camisetas</a>
        <a href="views/Cliente/Pantalones.php">Pantalones</a>
        <a href="views/Cliente/Bermudas.php">Bermudas</a>
        <a href="views/Cliente/Gorras.php">Gorras</a>
        <a href="views/Cliente/Pantalonetas.php">Pantalonetas</a>
    </nav>

    <div class="container">
        <div class="product img-fb" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume1.jpg" alt="Perfume 1">
            <h3>Amaderada Especiada</h3>
            <p>Una fragancia temporal que combina notas frescas y amaderadas.</p>
            <p class="price">$170.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume2.jpg" alt="Perfume 2">
            <h3>Aromática fougère</h3>
            <p>Es una fragancia temporal que nos sirve para citas romanticas .</p>
            <p class="price">$160.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume3.jpg" alt="Perfume 3">
            <h3>BADEE-AL-OUD-BLACK</h3>
            <p>Profunda mezcla de maderas ahumadas y especias intensas.</p>
            <p class="price">$150.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume4.jpg" alt="Perfume 4">
            <h3>Bade'e Al Oud Amethyst</h3>
            <p>Fragancia floral y dulce con suaves notas de maderas orientales.</p>
            <p class="price">$150.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume5.jpg" alt="Perfume 5">
            <h3>khamrah lattafa</h3>
            <p>Dulce mezcla de especias, frutas exóticas y maderas cálidas</p>
            <p class="price">$200.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume6.jpg" alt="Perfume 6">
            <h3>Invictus Victory</h3>
            <p>Intensa combinación de especias frescas y maderas ambaradas.</p>
            <p class="price">$190.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume7.jpg" alt="Perfume 7">
            <h3>Afnan 9 pm</h3>
            <p>Aromática y seductora mezcla dulces y con toque calido.</p>
            <p class="price">$160.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume8.jpg" alt="Perfume 8">
            <h3>Amber oud gold</h3>
            <p>Fragancia elegante que combina frutas dulces, ámbar y oud cálido.</p>
            <p class="price">$200.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>

        <div class="product img-fi" onclick="location.href='index.html';" style="cursor:pointer;">
            <img src="./public/img/Cliente/Perfume9.jpg" alt="Perfume 9">
            <h3>lattafa pride of fakhar</h3>
            <p>Fragancia floral y frutal realizada con una calidez del ámbar y maderas orientales.</p>
            <p class="price">$190.000</p>
            <a href="compra.html"><button>Agregar</button></a>
        </div>
    </div>
    <footer>
        <p>&copy; Tu tienda de ropa , con la mejor calidad en el mercado.</p>
    </footer>

</body>

</html>