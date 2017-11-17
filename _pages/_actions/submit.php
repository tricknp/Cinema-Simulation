<?php 
	include "../../_settings/settings.php";

	$sala = $_POST['sala'];
	$filme = $_POST['filme'];
	$capacidade = $_POST['capacidade'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];

	$sql = "INSERT INTO sessao(sala, filme, data, horaInicio, capacidade)
	VALUES ('$sala', '$filme', '$data', '$hora', '$capacidade')";

	if ($con->query($sql) === TRUE) {
		//redirecionando
		echo "<script>alert('Sessão Cadastrada com sucesso.')</script>";
		
	}else{
		echo "Error: ". $sql . "<br>" . $con->error;
	}

	$con->close();
 ?>

<!DOCTYPE>
 <html>
 	<body>
 		<head>
 			<title>Redirecting</title>
 			<meta http-equiv="Refresh" content="0; URL=http://localhost/cinema-pi1/_pages/list.php">
 		</head>
 	</body>
 </html>