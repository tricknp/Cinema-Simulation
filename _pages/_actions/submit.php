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
<<<<<<< HEAD
		echo "<script>alert('Sessão Cadastrada com sucesso.')</script>";
=======
>>>>>>> 2ad8ce7a5f14e0d7089c0d3fedc14806e81dcec2
		
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
 			<meta http-equiv="Refresh" content="0; URL=http://localhost/cinema-pi1/_pages/list.php">
=======
<<<<<<< HEAD
 			<title>Redirecting</title>
=======
>>>>>>> 93e6762ff7b37e1ad0156a552d48c55cd2c0ac60
 			<meta http-equiv="Refresh" content="0; URL=http://localhost/cinema-pi1/_pages/include.php">
>>>>>>> 2ad8ce7a5f14e0d7089c0d3fedc14806e81dcec2
 		</head>
 	</body>
 </html>