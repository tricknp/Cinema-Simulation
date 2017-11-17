<?php
	include "../../_settings/settings.php";
	$cod = $_GET['cod'];

	$sql="SELECT * FROM sessao WHERE id=$cod";
	$result = $con->query($sql);
	 
	    $sessao = $result->fetch_assoc();
			$sala =  $sessao['sala'];
			$filme =  $sessao['filme'];
<<<<<<< HEAD
			$capacidade =  $sessao['capacidade'];
			$hora =  $sessao['horaInicio'];
=======
			$sessao =  $sessao['capacidade'];
			$hora =  $sessao['hora'];
>>>>>>> 221d01e7f4eb23497ee0c5833b7f22dce344b7b8
			$data =  $sessao['data'];
	
	$con->close();
?>

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

	<form method="POST" action="../_actions/confirmChange.php?cod=<?=$cod?>" class="formIncluir">
			
		<h1>Alterar Sessão:</h1>
		<hr class="hrAlterC">
		
		<div class="containerIncluir">
			<p>
				<label for="sala">Sala:</label>
<<<<<<< HEAD
		   		<input type="number" id="sala" name="sala" class="inputInclude" value="<?=$sala?>" required>
			</p>
			<p>
				<label for="filme">Filme:</label>
		   		<input type="text" id="filme" name="filme" class="inputInclude" value="<?=$filme?>" required>
			</p>
			<p>
				<label for="capacidade">Capacidade:</label>
		   		<input type="number" id="capacidade" name="capacidade" class="inputInclude" value="<?=$capacidade?>" required>
			</p>		
			<p>
				<label for="sala">Data:</label>
		   		<input type="date" id="data" name="data" class="inputInclude" value="<?=$data?>" required>
			</p>
			<p>
				<label for="hora">Hora de inicio:</label>
		   		<input type="time" id="hora" name="hora" class="inputInclude" value="<?=$hora?>" required>
=======
		   		<input type="text" id="sala" name="sala" class="inputInclude" value="<?=$sala?>">
			</p>
			<p>
				<label for="filme">Filme:</label>
		   		<input type="text" id="filme" name="filme" class="inputInclude" value="<?=$filme?>">
			</p>
			<p>
				<label for="capacidade">Capacidade:</label>
		   		<input type="number" id="capacidade" name="capacidade" class="inputInclude" value="<?=$capacidade?>">
			</p>		
			<p>
				<label for="sala">Data:</label>
		   		<input type="date" id="data" name="data" class="inputInclude" value="<?=$data?>">
			</p>
			<p>
				<label for="hora">Hora de inicio:</label>
		   		<input type="time" id="hora" name="hora" class="inputInclude" value="<?=$hora?>">
>>>>>>> 221d01e7f4eb23497ee0c5833b7f22dce344b7b8
			</p>
			<input type="submit" class="btnSubmit" value="Confirmar" id="btnConfirmC">
     		<a href="../alter.php"><input type="button" class="btnCancel" value="Cancelar" id="btnCancel"></a>
		</div>	
	</form>
		
</body>
</html>