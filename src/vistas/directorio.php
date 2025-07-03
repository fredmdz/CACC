<?php
  use Alansnow\Ciencia\modelo\Tema;
  use Alansnow\Ciencia\config\Conexion;

  $conectar = new Conexion();
  $tema = new Tema();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/estilos.css">
    <link rel="stylesheet" href="src/assets/css/traduccion.css">
    <link rel="stylesheet" href="src/assets/css/directorio-info.css">
    <link rel="stylesheet" href="src/assets/css/directorio-info-res.css">
    <link rel="stylesheet" href="src/assets/css/btnSubir.css">
    <link rel="stylesheet" href="src/assets/css/directorio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php';?>

      <header id="header" class="header">
        <div id="header-eclipse" class="nada"></div>
        <div id="header-contenido" class="header-content">
          <h1 class="text-center que-t">Comité creador</h1>
          <p class="text-center que-es">Ciencia abierta. Comunicación del conocimiento</p>        </div>
      </header>


        <div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <p class="text-blk section-head-text">
      Conoce nuestro equipo
    </p>
    <p class="text-blk section-subhead-text">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
    <div class="responsive-container-block">
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="src/assets/img/Dra.Andrea.png">
          </div>
          <p class="text-blk name">
          Dr. Andrea
          </p>
          <p class="text-blk position">
          Coordinadora General del <br> CEDES
          </p>
          <div class="social-media-links">
            <a href="https://twitter.com/cedesunach" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
            </a>
            <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="src/assets/img/rocio22.png">
          </div>
          <p class="text-blk name">
          Mtra. Rocío Aguilar Sánchez
          </p>
          <p class="text-blk position">
          Creadora del proyecto Ciencia Abierta para la Comunicación del Conocimiento
          </p>
          <div class="social-media-links">
            <a href="https://twitter.com/cedesunach" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
            </a>
            <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="src/assets/img/alan_img.jpg">
          </div>
          <p class="text-blk name">
          Alan de Jesús Gómez <br> Vera
          </p>
          <p class="text-blk position">
          Desarrollador original del proyecto Ciencia Abierta para la Comunicación del Conocimiento
          </p>
          <div class="social-media-links">
            <a href="https://twitter.com/cedesunach" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
            </a>
            <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
          <img class="team-img" src="src/assets/img/andrew.jpeg">
          </div>
          <p class="text-blk name">
          Bryan Andrew Castro Valencia
          </p>
          <p class="text-blk position">
          Desarrollador de Seguimiento del Proyecto Ciencia Abierta para la Comunicación del Conocimiento
          </p>
          <div class="social-media-links">
            <a href="https://twitter.com/cedesunach" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
            </a>
            <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="src/assets/img/alejandro_venegas.png">
          </div>
          <p class="text-blk name">
          Mtro. Alejandro Venegas Becerra
          </p>
          <p class="text-blk position">
          Jefe del Departamento de Atención a Grupos Étnicos (DAGE) ICHEJA
          </p>
          <div class="social-media-links">
            <a href="https://twitter.com/cedesunach" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
            </a>
            <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="src/assets/img/MARIO.png">
          </div>
          <p class="text-blk name">
          Mario Andrés De Leo Winkler
          </p>
          <p class="text-blk position">
          Director de Comunicación del Conocimiento
          </p>
          <div class="social-media-links">
            <a href="https://twitter.com/cedesunach" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
            </a>
            <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
            </a>
          </div>
        </div>
      </div>
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="src/assets/img/MIRIAM.png">
          </div>
          <p class="text-blk name">
          Miriam Carrillo Barragán
          </p>
          <p class="text-blk position">
          Creadora del proyecto Ciencia Abierta para la Comunicación del Conocimiento
          </p>
          <div class="social-media-links">
            <a href="https://twitter.com/cedesunach" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
            </a>
            <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="src/assets/img/Edgar.jpg">
          </div>
          <p class="text-blk name">
          Edgar Amauri Hernández Hernández
          </p>
          <p class="text-blk position">
          Desarrollador de Seguimiento del Proyecto Ciencia Abierta para la Comunicación del Conocimiento
          </p>
          <div class="social-media-links">
            <a href="https://twitter.com/cedesunach" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
            </a>
            <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
            </a>
          </div>
        </div>
      </div>
    </div>      
  </div>
</div>


      <button id="btn-subir" class="btn-subir-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="" class="bi-caret-up-fill" viewBox="0 0 16 16">
          <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
        </svg>
      </button>

<?php include 'footer.php';?>
      
      <script src="src/assets/js/bootstrap.bundle.min.js"></script>
      <script src="src/assets/js/navbar.js"></script>
      <script src="src/assets/js/eclipseContenido.js"></script>
      <script src="src/assets/js/btnSubir.js"></script>
      <script src="src/assets/js/contenidoSecciones.js"></script>
</body>
</html>