<?php
  use Alansnow\Ciencia\config\Conexion;
  use Alansnow\Ciencia\modelo\Contenido;
  use Alansnow\Ciencia\modelo\Categoria;
  use Alansnow\Ciencia\modelo\Tema;

  $categorias=new Categoria();
  $conectar=new Conexion();
  $contenidos=new Contenido();
  $tema = new Tema();

  //obtener ip del visitante
  function getVisitorIP() {
    return $_SERVER['REMOTE_ADDR'];
  }
  $visitorIP = getVisitorIP();

  // Connect to the database
  // Save the visitor's IP address to the database
 //$conectar->query("INSERT INTO visitantes (IP, Time) VALUES ('$visitorIP', NOW())");




 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciencia abierta para la comunicación del conocimiento</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/estilos.css">
    <link rel="stylesheet" href="src/assets/css/btnSubir.css">
    <link rel="stylesheet" href="src/assets/css/carrousel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

    <header id="header" class="header">
      <div id="header-eclipse" class="nada"></div>
      <div id="header-contenido" class="header-content">
        <div id="alerta-eclipse" class="alerta-eclipse-none">
          <small>¡Dale click en el botón que dice "Normal" para ver el cambio!</small>
          <a id="okay" class="text-white" href="">Entendido</a>
        </div>
        <div class="d-flex justify-content-center">
          <img class="img-header" src="src\assets\img\logo_cedes.png" alt="">
        </div>
      </div>
    </header>
    
    <main class="container seccion-ctn">

      <section class="">
        <h2 id="texto-carousel" class="text-center mb-3 txt-carousel">Lo nuevo...
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="logo-postcard" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4Zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5ZM10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM13 8h-2V6h2v2Z"/>
              </svg>
        </h2>

        <div id="carouselExampleDark" class="carousel carousel-dark slide carrusel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
          <?php
            $resultado=$contenidos->ultimosContenidos($conectar);
            $primerElemento = true;
            foreach ($resultado as $registro) {
              $contenidos->setId($registro['id']);
              $contenidos->setArchivo($registro['archivo']);
              $contenidos->setTitulo($registro['titulo_contenido']);
              $contenidos->setFecha($registro['fecha']);
            
          ?>
            <div class="carousel-item <?php echo ($primerElemento) ? 'active' : ''; ?>" data-bs-interval="10000">
            <?php
                  if (strpos($contenidos->getArchivo(), "img") or strpos($contenidos->getArchivo(), "jpg") or strpos($contenidos->getArchivo(), "png") or strpos($contenidos->getArchivo(), "jpeg") or strpos($contenidos->getArchivo(), "pdf")) {

                    ?>
                    <img src="src/assets/multimedia/img/<?php echo $contenidos->getArchivo();?>" class="img-fluid d-block w-75 img-carrusel" height="400px" alt="...">
                    <?php
                  }
                  elseif (strpos($contenidos->getArchivo(), "mp4") or strpos($contenidos->getArchivo(), "mp3")) {
                    
                    ?>
                    <video src="src/assets/multimedia/video/<?php echo $contenidos->getArchivo();?>" class="img-fluid d-block w-75 h-75 img-carrusel" controls></video>
                    <?php
                  }
                ?>
              <div class="carousel-caption d-none d-md-block">
                <a class="link-offset-2 link-underline link-underline-opacity-0" href="doc/<?php echo $contenidos->getId();?>"><h5 class="text-white"><?php echo $contenidos->getTitulo();?></h5></a>
                <p class="text-white"><?php echo $contenidos->getFecha();?></p>
              </div>
            </div>
              <?php 
            $primerElemento = false;
            } ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span id="carousel" class="carousel-control-prev-icon btn-carousel-uno" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span id="carousel-2" class="carousel-control-next-icon btn-carousel-dos" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <h2 id="texto-grilla" class="text-center txt-grilla">Categorias...
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="logo-postcard" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4Zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5ZM10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM13 8h-2V6h2v2Z"/>
          </svg>
      </h2>
      <!-- Para mostrar las categorias mas recientes -->
      <section class="seccion-grilla">
      <?php
        $resultado=$categorias->ultimasCategoriasCombinadas($conectar);
        foreach ($resultado as $registro) {
          $categorias->setId($registro['id']);
          $categorias->setArchivo($registro['archivo']);
          $categorias->setTitulo($registro['titulo']);
          $categorias->setTipo($registro['tipo']);
        
      ?>
        <div class="opcion">
          <img src="src/assets/multimedia/img/<?php echo $categorias->getArchivo();?>" alt="Proyecto 1">
          <div class="overlay">
            <p><?php echo $categorias->getTitulo();?> - <?php echo $categorias->getTipo();?></p>
          </div>
        </div>
      <?php } ?>
      </section>

      <section>
        <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5eu6nvqrqif&amp;m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
      </section>
      <!-- los logos que muestran abajo de la pagina -->
      <div class="marquesina-ctn">
        <div class="marquesinas">
            <img class="marquesina-img-uno" src="src/assets/img/CEDES-color-oficial_transp Negro.png" alt="Imagen 1">
            <img class="marquesina-img-uno" src="src/assets/img/unach.png" alt="Imagen 2">
            <img class="marquesina-img-uno" src="src/assets/img/UAM.png" alt="Imagen 3">
            <img class="marquesina-img-uno" src="src/assets/img/jubileo3.png" alt="Imagen 4">
        </div>
    </div>
    </main>

    <button id="btn-subir" class="btn-subir-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="" class="bi-caret-up-fill" viewBox="0 0 16 16">
        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
      </svg>
    </button>

<?php include 'footer.php'; ?>
    <script src="/src/"></script>
    <script src="src/assets/js/bootstrap.bundle.min.js"></script>
    <script src="src/assets/js/modoEclipse.js"></script>
    <script src="src/assets/js/navbar.js"></script>
    <script src="src/assets/js/btnSubir.js"></script>
</body>
</html>