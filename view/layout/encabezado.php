<!doctype html>
<html lang="esp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Reposec v2.0</title>
    </head>
<body>
  <div class="container-fluid">
    <div class="row" style="height: 100vh;">
      <div class="col-2 col-sm-3 col-xl-2 bg-institucional">
        <div class="sticky-top">
          <nav class="navbar bg-institucional border-bottom border-white mb-3" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
              <!-- <i class="bi bi-house-door"></i> -->
                <img src="assets\images\escudo.jpg" alt="Bootstrap" width="30" height="30" class="rounded-circle d-inline-block align-text-middle">
                <span class="d-none d-sm-inline ms-2">Reposec2.0</span>
              </a>
            </div>
          </nav>
          <nav class="nav flex-column">
            <?php if (isset($_SESSION['ADMINISTRADOR'])): ?>
              <a class="nav-link text-white" style="white-space: nowrap;" href="index.php?c=Tablero&a=IndexAdministrador">
                <i class="bi bi-gear-wide-connected"></i>
                <span class="d-none d-sm-inline ms-2">Administración</span>
              </a>
              <?php endif; ?>
              <?php if (isset($_SESSION['ASESOR'])): ?>
                <a class="nav-link text-white" href="index.php?c=Tablero&a=IndexAsesor">
                  <i class="bi bi-folder"></i>
                  <span class="d-none d-sm-inline ms-2">Mis grupos</span>
                </a>
                <?php endif; ?>
                <?php if (isset($_SESSION['DOCENTE'])): ?>
                  <a class="nav-link text-white" href="index.php?c=Tablero&a=IndexDocente">
                    <i class="bi bi-journal-bookmark"></i>
                    <span class="d-none d-sm-inline ms-2">Mis clases</span>
                  </a>
                  <?php endif; ?>
                </nav>
              </div>
              <div class="align-bottom" id="copyright">
                <nav class="nav align-bottom flex-column text-center">
                  <span class="navbar-text text-white ms-2 mb-0 pb-0">
                    <i class="bi bi-c-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Desarrollado por IC Brando Valenzuela"> 2024</i> 
                  </span>
                  <span class="navbar-text text-white ms-2 mb-0 pt-0 d-none d-sm-inline">
                    IC Brando Valenzuela
                  </span>
                </nav>
              </div>
            </div>
            <div class="col-10 col-sm-9 col-xl-10 p-0 m-0">
              <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
                <div class="container-fluid">
                  <span class="nav-text text-end">
              <img src="assets\images\escudo.jpg" alt="Bootstrap" width="40" height="40" class="rounded-circle d-inline-block align-text-middle">
              <?= $_SESSION['usuario']." ".$_SESSION['apellidoUsuario']; ?>
            </span>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="index.php?c=Sesion&a=CerrarSesion" class="nav-link"><i class="bi bi-arrow-bar-right me-2"></i> Cerrar sesión</a>
              </li>
            </ul>
          </div>
        </nav>