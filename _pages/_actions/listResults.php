<?php
	
	include "../../_settings/settings.php";

	$filter = isset($_POST['filter']) ? $_POST['filter'] : '';

	$sql = "SELECT * FROM sessao WHERE filme LIKE '%$filter%'";
	$result = $con->query($sql);
	
	echo '
		<table class="list-table" id="table">
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
	';

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
			echo "</tr>";
		
			$num++;	
		}

		echo "</tbody>";
		echo "</table>";

		echo "<h3 class='listados'>N de Sessões Listadas: " .$num. "</h3>";
						
		}else{
			echo "<h3>Nenhuma sessão cadastrada</h3>";
		}
	$con->close();	
	
?>