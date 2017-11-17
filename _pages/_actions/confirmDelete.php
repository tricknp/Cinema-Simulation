<!DOCTYPE html>
<html>
<head>
	<title>Redirecting</title>
	<meta http-equiv="Refresh" content="0; URL=http://localhost/cinema-pi1/_pages/delete.php">
</head>
</head>
<body>

	<?php 
		include "../../_settings/settings.php";

		$cod = $_GET['cod'];

		$sql = "DELETE FROM sessao WHERE id=$cod";
			
		if ($con->query($sql) === TRUE) {
   			 echo "<script>alert('Sessão excluida com sucesso.')</script>";
		}else{
    		echo "Error: " . $sql . "<br>" . $con->error;
		}
	$con->close();	
	?>



</body>
</html>