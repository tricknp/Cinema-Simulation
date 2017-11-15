<!DOCTYPE html>
<html>
<head>
	<title>Alterar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../_CSS/pages.css">
	<link rel="icon" href="../../_images/icon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="../../_images/icon.png" type="image/x-icon" />
</head>
</head>
<body>
	<header class="head">
		<a href="../home.php"><img src="../../_images/logo.png" class="logoHome"></a>
		<h1 class="titlePages">Alterar</h1>
		<nav class="navigation">
			<ul>
				<li>
					<a href="../include.php" class="navHome">Incluir</a>
					<a href="../list.php" class="navHome">Listar</a>
					<a href="../alter.php" class="navHome">Alterar</a>
					<a href="../delete.php" class="navHome">Excluir</a>
				</li>
			</ul>
		</nav>
	</header>
	
	<section>
		<?php 
			include "../../_settings/settings.php";

			$cod = $_GET['cod'];
			$sala = $_POST['sala'];
			$filme = $_POST['filme'];
			$capacidade = $_POST['capacidade'];
			$hora = $_POST['hora'];
			$data = $_POST['data'];

			$sql = "UPDATE sessao 
			SET sala = '$sala, filme = '$filme', capacidade = '$capacidade', horaInicio = '$hora', data = '$data 
			WHERE id=$cod";

			if ($con->query($sql) === TRUE) {
   				 echo "<b>Sessao alterado com sucesso</b>";
			}else{
    			echo "Error: " . $sql . "<br>" . $con->error;
			}

			$con->close();	
		 ?>
	</section>

</body>
</html>