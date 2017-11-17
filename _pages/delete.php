<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2ad8ce7a5f14e0d7089c0d3fedc14806e81dcec2
<!DOCTYPE html>
<html>
<head>
	<title>Alterar</title>
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 221d01e7f4eb23497ee0c5833b7f22dce344b7b8
<?php
	include "../_settings/settings.php";
	$cod = $_GET["cod"];

	$sql="SELECT * FROM sessao WHERE id=$cod";
	$result = $con->query($sql);
	 
	    $sessao = $result->fetch_assoc();
			$sala =  $sessao['sala'];
			$filme =  $sessao['filme'];
			$sessao =  $sessao['capacidade'];
			$hora =  $sessao['hora'];
			$data =  $sessao['data'];

	$con->close();
?>

<<<<<<< HEAD
=======
=======
>>>>>>> 363a6df11f76038903f09bd6277e88160dd266a5
>>>>>>> 221d01e7f4eb23497ee0c5833b7f22dce344b7b8
<!DOCTYPE html>
<html>
<head>
	<title>Excluir</title>
>>>>>>> 93e6762ff7b37e1ad0156a552d48c55cd2c0ac60
>>>>>>> 2ad8ce7a5f14e0d7089c0d3fedc14806e81dcec2
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../_CSS/pages.css">
	<link rel="icon" href="../_images/icon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="../_images/icon.png" type="image/x-icon" />
</head>
</head>
<body>
	<header class="head">
		<a href="home.php"><img src="../_images/logo.png" class="logoHome"></a>
<<<<<<< HEAD
		<h1 class="titlePages">Alterar</h1>
=======
<<<<<<< HEAD
		<h1 class="titlePages">Alterar</h1>
=======
		<h1 class="titlePages">Excluir</h1>
>>>>>>> 93e6762ff7b37e1ad0156a552d48c55cd2c0ac60
>>>>>>> 2ad8ce7a5f14e0d7089c0d3fedc14806e81dcec2
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

<<<<<<< HEAD
	<section class="tables-container">
		<table class="list-table">
			<thead class="list-tHead">
				<tr>	
			        <th>Codigo</th>
			        <th>Sala</th>
			        <th>Filme</th>
			        <th>Capacidade</th>
			        <th>Hora de inicio</th>			
			        <th>Data</th>
			        <th>Ação</th>
				</tr>
			</thead>

			<tbody class="list-tBody">
				<?php 
					include "../_settings/settings.php";

					$sql = "SELECT * FROM sessao";
					$result = $con->query($sql);

					$num = 0;

					if ($result->num_rows > 0) {
						while ($line = $result->fetch_assoc()) {
							$id = $line['id'];
							$sala = $line['sala'];
							$filme = $line['filme'];
							$capacidade = $line['capacidade'];	
							$hora = $line['horaInicio'];
							$data =  $line['data'];

							echo "<tr>";
							echo "<td>" .$id. "</td>";
							echo "<td>" .$sala. "</td>";
							echo "<td>" .$filme. "</td>";
							echo "<td>" .$capacidade. "</td>";
							echo "<td>" .$hora. "</td>";
							echo "<td>" .$data. "</td>";
							echo "<td> <a href='_secondary-pages/deleteAction.php?cod=$id' class='btnList' role='button'>Excluir</a>";
							echo "</tr>";

						$num++;	
						}

						echo "</tbody>";	
						echo "</table>";
						
					}else{
						echo "Nenhuma sessão cadastrada";
					}

					$con->close();
				 ?>
	</section>
=======
<<<<<<< HEAD
	<table class="list-table">
		<thead class="list-tHead">
			<tr>	
		        <th>Codigo</th>
		        <th>Sala</th>
		        <th>Filme</th>
		        <th>Capacidade</th>
		        <th>Hora de inicio</th>			
		        <th>Data</th>
			</tr>
		</thead>

		<tbody class="list-tBody">
			<?php 
				include "../_settings/settings.php";

				$sql = "SELECT * FROM sessao";
				$result = $con->query($sql);

				$num = 0;

				if ($result->num_rows > 0) {
					while ($line = $result->fetch_assoc()) {
						$id = $line['id'];
						$sala = $line['sala'];
						$filme = $line['filme'];
						$capacidade = $line['capacidade'];	
						$hora = $line['horaInicio'];
						$data =  $line['data'];

						echo "<tr>";
						echo "<td>" .$id. "</td>";
						echo "<td>" .$sala. "</td>";
						echo "<td>" .$filme. "</td>";
						echo "<td>" .$capacidade. "</td>";
						echo "<td>" .$hora. "</td>";
						echo "<td>" .$data. "</td>";
						echo "<td> <a href='_secondary-pages/deleteAction.php?cod=$id' class='btnAlter' role='button'>Excluir</a>";
						echo "</tr>";

					$num++;	
					}

					echo "</tbody>";	
					echo "</table>";
					
				}else{
					echo "Nenhuma sessão cadastrada";
				}

				$con->close();
			 ?>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 221d01e7f4eb23497ee0c5833b7f22dce344b7b8
	<form method="POST" action="../_settings/save.php" class="formIncluir">
		
		<h1>Cadastrar Sessão:</h1>
		<hr class="hrIncluir">
		
		<div class="containerIncluir">
			<p>
				<label for="sala">Sala:</label>
	    		<input type="text" id="sala" name="sala" class="inputInclude">
			</p>
			<p>
				<label for="filme">Filme:</label>
	    		<input type="text" id="filme" name="filme" class="inputInclude">
			</p>
			<p>
				<label for="capacidade">Capacidade:</label>
	    		<input type="number" id="capacidade" name="capacidade" class="inputInclude">
			</p>		
			<p>
				<label for="sala">Data:</label>
	    		<input type="date" id="data" name="data" class="inputInclude">
			</p>
			<p>
				<label for="hora">Hora de inicio:</label>
	    		<input type="time" id="hora" name="hora" class="inputInclude">
			</p>
				<input type="submit" class="btnSubmit" value="Enviar" id="btnEnviar">
    			<input type="button" class="btnClear" value="Limpar" id="btnClear">
		</div>	
	</form>	
<<<<<<< HEAD
=======
=======
>>>>>>> 363a6df11f76038903f09bd6277e88160dd266a5
>>>>>>> 221d01e7f4eb23497ee0c5833b7f22dce344b7b8
>>>>>>> 93e6762ff7b37e1ad0156a552d48c55cd2c0ac60
>>>>>>> 2ad8ce7a5f14e0d7089c0d3fedc14806e81dcec2
</body>
</html>