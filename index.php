<?php
  $allp = "Todos los productos" ;
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ciannastore.com</title>
    <meta name="viewport" content="width=device-width,
    user-scalable=no,
    initial-scale=1.0,
    maximum-scale=1.0,
    minimum-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <div class="top-bar">
        <div class="cianabrand">
          <img src="../../../img/brand.png" alt="">
        </div>
        <nav>
          <ul>
            <li><a href="Perfil.html">Mi perfil</a></li>
            <li><a href="wishlist.html">Mi lista de deseos</a></li>
            <li><a href="Cart.html">Carrito</a></li>
          </ul>
        </nav>
      </div>
      <div class="bottom-bar">
        <!--Menu-->
        <nav>
          <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="Novedades.html">Novedades</a></li>
            <li><a href="About.html">Acerca de</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section class="main">
      <section class="container">
        <section class="all-products">
          <h2><?php echo $allp; ?></h2>
        </section>
      </section>
    </section>
    <footer>
      <div class="networks">
        <div class="icon-net">
          <a href="#"><i class="fa fa-facebook-official"></i></a>
        </div>
        <div class="icon-net">
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="icon-net">
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer>
  </body>
</html>
