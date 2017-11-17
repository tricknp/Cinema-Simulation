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
		
	}else{
		echo "Error: ". $sql . "<br>" . $con->error;
	}

	$con->close();
 ?>

<!DOCTYPE>
 <html>
 	<body>
 		<head>
<<<<<<< HEAD
 			<title>Redirecting</title>
=======
>>>>>>> 93e6762ff7b37e1ad0156a552d48c55cd2c0ac60
 			<meta http-equiv="Refresh" content="0; URL=http://localhost/cinema-pi1/_pages/include.php">
 		</head>
 	</body>
 </html>