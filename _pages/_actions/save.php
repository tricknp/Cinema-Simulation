<?php 
	include "../../_settings/settings.php";

	$sala = $_POST['sala'];
	$filme = $_POST['filme'];
	$capacidade = $_POST['capacidade'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];

	echo "<h2>Sala: $sala</h2>";
	echo "<h2>Filme: $filme</h2>";
	echo "<h2>Capacidade: $capacidade</h2>";
	echo "<h2>Data: $data</h2>";
	echo "<h2>Hora: $hora</h2>";

	$sql = "INSERT INTO sessao(sala, filme, data, horaInicio, capacidade)
	VALUES ('$sala', '$filme', '$data', '$hora', '$capacidade')";

	if ($con->query($sql) === TRUE) {
		echo "Sessão cadastrada.";
	}else{
		echo "Error: ". $sql . "<br>" . $con->error;
	}

	$con->close();
 ?>