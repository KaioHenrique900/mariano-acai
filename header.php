<html>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">

	<head>
		<title>Mariano Açaí Delivery</title>
	</head>

<?php
	session_start();

	//$connect = mysqli_connect("localhost", "root", "Senha1234", "sistemalogin");


?>

<body>
	<!--<div class="header" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<nav class="header_toolbar">
			<ul>
				<li><a href="home.php" name="home">Home</a></li>
				<li class="dropdown">
					<button class="dropbtn">Cadastrar</button>
					<div class="dropdown-content">
					  	<a href="cadastrar_filme.php">Filme</a>
					  	<a href="cadastrar_diretor.php">Diretor</a>
					  	<a href="cadastrar_cinema.php">Cinema</a>
					  	<a href="cadastrar_estudio.php">Estúdio</a>
					</div>
				</li>
				<li class="dropdown">
					<button class="dropbtn">Consultar</button>
					<div class="dropdown-content">
					  	<a href="consultar_usuario.php">Usuários</a>
					  	<a href="consultar_filme.php">Filmes</a>
					  	<a href="consultar_diretor.php">Diretores</a>
					  	<a href="consultar_cinema.php">Cinemas</a>
					  	<a href="consultar_estudio.php">Estúdios</a>
					</div></li>
				<li><a href="sobre.php" name="sobre">Sobre</a></li>
				<li><a href="index.php" name="sair">Sair</a></li>
			</ul>
		</nav>
		
	</div>-->

	<div class="header_content">
		<img class="logo" src="imagens/logo.png">
	</div>