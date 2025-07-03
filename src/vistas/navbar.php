<?php
  use Alansnow\Ciencia\modelo\Tema;
  use Alansnow\Ciencia\config\Conexion;

  $conectar = new Conexion();
  $tema = new Tema();
?>

<nav id="nav" class="navbar navbar-black navbar-expand-md navbar bg-color">
    <div class="container">
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand logo-nav" href="./">
        <img class="desktop-logo" src="src/assets/img/Cienciaabierta2blancovertical.png" width="65" alt="../src/assets/img/Cienciaabierta2blanco.png">
        <img class="mobile-logo" src="src/assets/img/logo_cedes.png" width="65" alt="../src/assets/img/Cienciaabierta2blanco.png">
        </a>
        <ul class="navbar-nav d-flex justify-content-center align-items-center opciones-nav">
        <li class="nav-item dropdown nav-4">
            <a class="nav-link dropdown-toggle text-white" href="que-es" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ¿Qué es?
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="logo-moon-stars" viewBox="0 0 16 16">
                  <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                  <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                </svg>
            </a>
            <ul id="menu" class="dropdown-menu menu">
            <li><a id="item-1" class="dropdown-item" href="que-es">¿Qué es?</a></li>
              <li><a id="item-5" class="dropdown-item" href="linea-del-tiempo">Línea del tiempo</a></li>
              <li><a id="item-2" class="dropdown-item" href="marco-legal">Marco legal</a></li>
              <li><a id="item-3" class="dropdown-item" href="directorio">Directorio</a></li>
            </ul>
          </li>
          <li class="nav-item nav-2">
            <a class="nav-link text-white" href="objetivo">
              Objetivo
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="logo-sun" viewBox="0 0 16 16">
                  <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                </svg>
            </a>
          </li>
          <li class="nav-item dropdown nav-4">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Compromiso social
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="logo-stars" viewBox="0 0 16 16">
                  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                </svg>
            </a>
            <ul id="menu-1" class="dropdown-menu menu">
              <li><a class="dropdown-item" href="compromiso-social">Compromiso social</a></li>
              <li><a class="dropdown-item" href="compromiso-galeria">Galeria</a></li>
            </ul>
          </li>
            </a>
          </li>
          <li class="nav-item dropdown nav-4">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contenido
            </a>
            <ul id="menu-2" class="dropdown-menu menu">
              <?php
              $res = Tema::obtenerTemas($conectar);
              foreach ($res as $reg) {
                ?>
                <li><a id="item-4" class="dropdown-item" href="tema/<?php echo $reg['id']; ?>"><?php echo $reg['nombre'] ?></a></li>
                <?php
              }
              ?>
            </ul>
          </li>
          <li id="btnModo" class="nav-item nav-5">
            <a class="nav-link text-white" id="eclipse"><span>Eclipse</span></a>
          </li>
        </ul>
        <img class="" src="src/assets/img/logo_unach_p_fondo_blanco.png" alt="Logo UNACH" width="120">

        <a href="https://www.cedes.unach.mx/">
          <img class="logo_cedes" src="src/assets/img/cedes.png" alt="">
        </a>
      </div>
    </div>
  </nav>