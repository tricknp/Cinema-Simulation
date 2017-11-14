<!DOCTYPE html>
<html>
<head>
	<title>Incluir</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../_CSS/pages.css">
	<link rel="icon" href="../_images/icon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="../_images/icon.png" type="image/x-icon" />
</head>
</head>
<body>
	<header class="head">
		<a href="home.php"><img src="../_images/logo.png" class="logoHome"></a>
		<h1 class="titlePages">Incluir</h1>
		<nav class="navigation">
			<ul>
				<li>
					<a href="include.php" class="navHome">Incluir</a>
					<a href="list.php" class="navHome">Listar</a>
					<a href="alter.php" class="navHome">Alterar</a>
					<a href="delete.php" class="navHome">Excluir</a>
				</li>
			</ul>
		</nav>
	</header>

	<form action="POST" action="save.php" class="formIncluir">
		
		<h1>Cadastrar Sessão:</h1>
		<hr class="hrIncluir">
		
		<div class="containerIncluir">
			<p>
				<label for="sala">Sala:</label>
	    		<input type="text" id="sala" name="sala">
			</p>
			<p>
				<label for="filme">Filme:</label>
	    		<input type="text" id="filme" name="filme">
			</p>
			<p>
				<label for="capacidade">Capacidade:</label>
	    		<input type="number" id="capacidade" name="capacidade">
			</p>		
			<p>
				<label for="sala">Data:</label>
	    		<input type="date" id="data" name="data">
			</p>
			<p>
				<label for="hora">Hora de inicio:</label>
	    		<input type="time" id="hora" name="hora">
			</p>
		</div>	
	</form>

</body>
</html>