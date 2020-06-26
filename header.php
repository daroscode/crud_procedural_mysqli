<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Schooler Web</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.13.1/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
	</head>
	<body>
		<?php 
			include 'procedures.php';  
		?>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link <?php echo ($url_now == 'alunos') ? 'active' : '' ?>" href="alunos.php">Alunos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo ($url_now == 'cursos') ? 'active' : '' ?>" href="cursos.php">Cursos</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container">
		<h1>Schooler Web | Sistema escolar</h1>
		<hr />
		<div class="row justify-content-md-center">