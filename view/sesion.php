<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
	<title>REPOSEC - Inicio de Sesión</title>
</head>
<body>
	<main class="container-fluid">
		<section class="row box justify-content-center align-items-center text-center">
		<article class="col-sm-10 col-md-7" style="background: #224488;">
			<div class="row tarjeta">
			<article class="col-sm-6 columna columna-izquierda d-flex flex-column justify-content-evenly">
				<h2>Colegio del Centro</h2>
				<img class="img-principal d-flex align-self-center" src="assets/images/escudo.png" alt="">      
				<h2>Secundaria</h2>
			</article>
			<article class="col-sm-6 columna columna-derecha d-flex flex-column justify-content-evenly">
				<div>
					<h3>Plataforma Docente</h3>
					<h4>Inicio de sesión</h4>
				</div>
				<form action="#" class="needs-validation" id="form-inicio-sesion" method="post" enctype="multipart/form-data" novalidate>
					<div class="form-floating">
						<input type="email" class="form-control" id="email" placeholder="Correo institucional" name="email" required>
						<label for="email">Correo institucional</label>
					</div>
					<div class="form-floating mt-3 mb-3">
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
						<div class="invalid-feedback" id="msj-usuario">Por favór, completa los campos.</div>
						<label for="pwd">Contraseña</label>
					</div>
					<input type="text" id="clave" name="clave" hidden>
					<input type="submit" class="btn btn-primary" value="Ingresar" ></input>
				</form>
				<div class="alert alert-warning" id="message" hidden>
				</div>
			</article>
			</div>
		</article>
		</section>
	</main>
  	<script src="https://kit.fontawesome.com/85e74fa750.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/sha256.min.js"></script>
	<script src="assets/js/inicio-sesion.js"></script>
</body>
</html>

