<!doctype html>
<html lang="esp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Reposec v2.0</title>
    </head>
<body>
<nav class="navbar navbar-expand-lg bg-institucional ">
    <div class="container text-white">
    <img src="assets\images\escudo.jpg" alt="Bootstrap" width="50" height="50" class="rounded-circle d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active link-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['usuario']." ".$_SESSION['apellidoUsuario']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?c=Sesion&a=CerrarSesion">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>